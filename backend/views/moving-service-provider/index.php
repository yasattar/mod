<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MovingServiceProviderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Moving Service Providers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="moving-service-provider-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Moving Service Provider', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'name',
            'owner_name',
            'email:email',
            // 'phone',
            // 'pin_code',
            // 'area',
            // 'address',
            // 'no_of_ambulances',
            // 'status',
            // 'created_at',
            // 'lat_long',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
