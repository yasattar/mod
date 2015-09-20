<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\StationaryServiceRequest */

$this->title = 'Create Stationary Service Request';
$this->params['breadcrumbs'][] = ['label' => 'Stationary Service Requests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stationary-service-request-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
