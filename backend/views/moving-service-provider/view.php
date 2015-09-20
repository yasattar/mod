<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MovingServiceProvider */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Moving Service Providers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="moving-service-provider-view">

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
            'owner_name',
            'email:email',
            'phone',
            'pin_code',
            'area',
            'address',
            'no_of_ambulances',
            'status',
            'created_at',
            'lat_long',
            'updated_at',
        ],
    ]) ?>

</div>
