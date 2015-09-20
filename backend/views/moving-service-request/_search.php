<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MovingServiceRequestSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="moving-service-request-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'request_id') ?>

    <?= $form->field($model, 'msp_id') ?>

    <?= $form->field($model, 'request_type') ?>

    <?= $form->field($model, 'distance') ?>

    <?php // echo $form->field($model, 'accept') ?>

    <?php // echo $form->field($model, 'reject') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
