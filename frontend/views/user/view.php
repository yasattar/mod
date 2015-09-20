<?php
include 'onOff.php';

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = 'User Profile';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$delete = false;
if (Yii::$app->user->identity->user_type === 'admin' && Yii::$app->user->identity->parent_id == 0) {
    if (Yii::$app->user->identity->id != $model->id)
        $delete = true;
}
?>
<div class="user-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?php
        if ($delete) {
            echo Html::a('Delete', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]);
        }
        ?>
    </p>
    <?php $status = array(10 => 'Active', 1 => 'InActive'); ?>
    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'username',
            'email:email',
            [
                'attribute' => 'status',
                'value' => $status[$model->status],
            ],
            [
                'label' => 'Created',
                'attribute' => 'created_at',
                'value' => Yii::$app->helper->dateTimeToLocal($model->created_at),
            ],
            [
                'label' => 'Updated',
                'attribute' => 'updated_at',
                'value' => Yii::$app->helper->dateTimeToLocal($model->updated_at),
            ]
        ],
    ])
    ?>

</div>
<?php
if (count($permissionSet) > 0) {
    $disabled = true;
    include '_permission.php';
}
?>
