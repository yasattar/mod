<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SocialRequestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Social Requests';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="social-request-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Social Request', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'requester_id',
            'attendent_id',
            'latitude',
            'longitude',
            // 'title',
            // 'short_description:ntext',
            // 'description:ntext',
            // 'image',
            // 'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
