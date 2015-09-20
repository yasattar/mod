<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StationaryServiceProviderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stationary Service Providers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stationary-service-provider-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Stationary Service Provider', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'name',
            'email:email',
            'phone',
            // 'pin_code',
            // 'status',
            // 'address:ntext',
            // 'speciality',
            // 'authority',
            // 'no_of_ambulances',
            // 'created_at',
            // 'lat_long',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
