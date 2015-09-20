<?php

namespace frontend\controllers;

use Yii;
use common\models\User;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Url;
use yii\helpers\Html;


/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller {

    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
            'access' => [
                'class' => \yii\filters\AccessControl::className(),
                'only' => ['index', 'create', 'update', 'view', 'delete'],
                'rules' => [
                    [
                        'actions' => ['index', 'create', 'view', 'delete', 'update'],
                        'allow' => true,
//                        'matchCallback' => function ($rule, $action) {
//                            return $this->checkUserActionAccess();
//                        }
                    ],
                ],
            ],
        ];
    }

    /**
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex() {
        $dataProvider = new ActiveDataProvider([
            'query' => User::find()->where("user_type = 'admin' AND parent_id !=0"),
            'pagination' => [
                'pageSize' => 10,
            ],
            'sort'=> ['defaultOrder' => [
                'id' => SORT_DESC,
            ] ]
        ]);

        return $this->render('index', [
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single User model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        $permissionSet = array();
        if ($this->getUser()->user_type == 'admin' && $this->getUser()->parent_id != 0) {
            // gathering permission set
            $defaultPackage = Package::find()->all();
            foreach ($defaultPackage as $df) {
                $permissionSet['info'][$df->id] = $df->package_name;
                $packagePermissionFields = json_decode($df->default_permission_set);
                foreach ($packagePermissionFields as $permissionField) {
                    $permissionSet['data'][$df->id][$permissionField] = $this->getPermissionValue($df->id, $permissionField, $id);
                }
            }
        }
        return $this->render('view', [
                    'model' => $this->findModel($id), 'permissionSet' => $permissionSet,
        ]);
    }

    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new User();
        
        $permissionSet = array();
       
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            /* save user privileges */
            $post = Yii::$app->request->post();
          //  $permission = $post['permission'];
          //  $this->saveUserPermission( $permission, $model->id, true);

          //  User::sendAccountRegistrationMail($model->email, $model->emailPassword);
            Yii::$app->session->setFlash('success', Yii::t('app', 'User Created.'));
            return $this->redirect(['view', 'id' => $model->id]);
        }
        return $this->render('create', [
                    'model' => $model, 'permissionSet' => $permissionSet,
        ]);
    }

    public function getPermissionValue($packageId, $permissionField, $userId) {
        $pData = UserPermissions::find()->where(['user_id' => $userId, 'permission_field' => $permissionField, 'package_id' => $packageId])->one();
        return $pData->permission_value;
    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);
        $permissionSet = array();
        $user = $this->getUser();
        $isAdmin = false;
        if ($user->user_type == 'admin' && $user->parent_id == 0 && $user->id != $id) {
            
            $isAdmin = true;
        }
        if ($model->load(Yii::$app->request->post())) {
            /* save user privileges */
            if ($isAdmin) {
                $post = Yii::$app->request->post();
                $permission = $post['permission'];
                $this->saveUserPermission($defaultPackage, $permission, $model->id);
            }
            if ($model->save()) {
                Yii::$app->session->setFlash('success', Yii::t('app', 'User Updated.'));
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }
      return $this->render('update', [
                   'model' => $model, 'permissionSet' => $permissionSet,
        ]);
    }

    public function saveUserPermission($defaultPackage, $permission, $id, $new = false) {
        foreach ($defaultPackage as $df) {
            $packagePermissionFields = json_decode($df->default_permission_set);
            foreach ($packagePermissionFields as $fieldName) {
                if ($new)
                    $userPermission = new UserPermissions();
                else {
                    $pData = UserPermissions::find()->where(['user_id' => $id, 'permission_field' => $fieldName, 'package_id' => $df->id])->one();
                    $userPermission = UserPermissions::findOne(($pData->id));
                }
                $userPermission->package_id = $df->id;
                $userPermission->user_id = $id;
                $userPermission->created_date = date('Y-m-d');
                $userPermission->permission_field = $fieldName;
                $userPermission->permission_value = $permission[$df->id][$fieldName];
                $userPermission->save(false);
            }
        }
    }

    /**
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
