<?php

use yii\widgets\Pjax;
use yii\helpers\Html;
use yii\grid\GridView;
use \common\components\Helper;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <p>
<?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(['enablePushState' => FALSE]); ?>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'username',
            'email:email',
            [
                'attribute' => 'status',
                'format' => 'raw',
                'value' => function ($data) {
                    $status = array(10 => 'Active', 1 => 'InActive');
                    return $status[$data->status];
                },
            ],
            [
                'label' => 'Created',
                'attribute' => 'created_at',
                'value' => function($data) {
                    return Helper::dateTimeToLocal($data->created_at);
                },
                'headerOptions' => ['width' => '170'],
            ],
            [
                'label' => 'Password',
                'format' => 'raw',
                'value' => function($data) {
                    return Html::button("Reset", array('class'=>'btn btn-primary btn-sm', 'onclick'=>"resetUserPassword('".$data->email."', this)"));
                },
                'headerOptions' => ['width' => '70'],
            ],
            ['class' => 'yii\grid\ActionColumn', 'header' => 'Action'],
        ],
    ]);
    ?>
<?php Pjax::end(); ?>  
</div>
