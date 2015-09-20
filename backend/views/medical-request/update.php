<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MedicalRequest */

$this->title = 'Update Medical Request: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Medical Requests', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="medical-request-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
