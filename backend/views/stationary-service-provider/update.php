<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StationaryServiceProvider */

$this->title = 'Update Stationary Service Provider: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Stationary Service Providers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="stationary-service-provider-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
