<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\StationaryServiceProvider */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Stationary Service Providers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stationary-service-provider-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'user_id',
            'name',
            'email:email',
            'phone',
            'pin_code',
            'status',
            'address:ntext',
            'speciality',
            'authority',
            'no_of_ambulances',
            'created_at',
            'lat_long',
            'updated_at',
        ],
    ]) ?>

</div>
