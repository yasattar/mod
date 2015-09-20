<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StationaryServiceRequest */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stationary-service-request-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'request_id')->textInput() ?>

    <?= $form->field($model, 'ssp_id')->textInput() ?>

    <?= $form->field($model, 'request_type')->dropDownList([ 'medical' => 'Medical', 'social' => 'Social', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'distance')->textInput() ?>

    <?= $form->field($model, 'accept')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'reject')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
