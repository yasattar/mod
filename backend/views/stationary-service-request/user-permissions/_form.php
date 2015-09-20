<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserPermissions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-permissions-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'package_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'permission_field')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'permission_value')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'updated_date')->textInput() ?>

    <?= $form->field($model, 'created_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
