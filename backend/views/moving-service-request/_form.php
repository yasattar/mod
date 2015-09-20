<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MovingServiceRequest */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="moving-service-request-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'request_id')->textInput() ?>

    <?= $form->field($model, 'msp_id')->textInput() ?>

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
