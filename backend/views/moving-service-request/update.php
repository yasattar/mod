<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MovingServiceRequest */

$this->title = 'Update Moving Service Request: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Moving Service Requests', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="moving-service-request-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
