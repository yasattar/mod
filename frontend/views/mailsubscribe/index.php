<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MailsubscribeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mailsubscribes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mailsubscribe-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mailsubscribe', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

         //   'id',
            'email:email',
        //    'created_by',
          //  'created_on',
          //  'modified_by',
            // 'modified_on',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
