<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\StationaryServiceProvider */

$this->title = 'Create Stationary Service Provider';
$this->params['breadcrumbs'][] = ['label' => 'Stationary Service Providers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stationary-service-provider-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
