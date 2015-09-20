<?php
namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Response;
use yii\rest\ActiveController;
/**
 * Site controller
 */
class ApiController extends ActiveController
{
    public $modelClass ='common\models\User';
    
    public function behaviors() {
        
        parent::behaviors();
    
        $behaviors['contentNegotiator'] =[
            'class'=>'yii\filters\ContentNegotiator',
            'formats'=>[
                'text/html'=> Response::FORMAT_JSON,
                'application/json'=>  Response::FORMAT_JSON,
                'application/xml'=>  Response::FORMAT_XML
            ]
        ];
          $behaviors['corsFilter'] =[
            'class'=> \yii\filters\Cors::className(),
              'cors'=>[
                  'Origin'=>['*'],
                     'Access-Control-Request-Method' => ['GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'HEAD', 'OPTIONS'],
                'Access-Control-Request-Headers' => ['*'],
                'Access-Control-Allow-Credentials' => true,
                'Access-Control-Max-Age' => 86400,
              ]
          ];
          return $behaviors;
    }
    
    
//     public function actionLogin() {
//        $requestData = array();
//        
//        $username = $_REQUEST['LoginForm']['username'];
//        $password = $_REQUEST['LoginForm']['password'];
//        
//        $user = \common\models\User::findOne(['username'=>$username]);
//        echo $user->validatePassword($password);
//        exit;
//     if (!$user || !$user->validatePassword($password))
//        {
//         
//            $requestData['msg']= "Email or password invalid!";
//            return  array('isSuccess' => false,'msg'=>$requestData);
//        }   
//        else
//        {
//            $requestData['msg']= "Successfully logged in.";
//            
//            return array('isSuccess' => true,'msg'=>"Successfully logged in.",'data'=>$user);
//        }
//     }
//    
    
      public function actionLogin()
    {
//        if (!\Yii::$app->user->isGuest) {
//           return  array('isSuccess' => false,'msg'=>"Already Logged In!");
//        }

        $model = new LoginForm();       
        $model->username = $_REQUEST['LoginForm']['username'];
        $model->password = $_REQUEST['LoginForm']['password'];
        
        if ( $model->login()) {
            $user = \common\models\User::findOne(['id'=>Yii::$app->user->id]);
           return array('isSuccess' => true,'msg'=>"Successfully logged in.",'data'=> $user);
        } else {
           return  array('isSuccess' => false,'msg'=>"Email or password invalid!");
        }
    }
    
    /*
     * 
     */
      public function actionSignup()
    {
        $model = new \common\models\User(); 
         $model = new User();
        
        $permissionSet = array();
       return  array('isSuccess' => false);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            /* save user privileges */
            $post = Yii::$app->request->post();
        $user = \common\models\User::findOne(['id'=>Yii::$app->user->id]);
           return array('isSuccess' => true,'msg'=>"Successfully logged in.",'data'=> $user);
        }
         else {
           return  array('isSuccess' => false,'errors'=>$model->errors);
        }
    }
}
