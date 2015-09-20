<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */


$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-signup">
    <div class="row well-sm"><h2 class="title pull-left">SingUp</h2></div>
     <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
        
    <div class="row">
        <div class="col-lg-5 col-md-5">
                <?= $form->field($model, 'first_name') ?>
                <?= $form->field($model, 'email') ?>
              
        </div>
        <div class="col-lg-5 col-md-5">
                <?= $form->field($model, 'last_name') ?>
              
                <?= $form->field($model, 'password')->passwordInput() ?>
        </div>
        
    </div>
    <div class="row">
    <div class="col-lg-8 col-md-9">
                <div class="form-group">
                    <div class="col-lg-5 col-md-5">
                       <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <?= Html::a('Existing User ? Login.',false, ['class' => 'btn btn-info', 'id'=>'loginformbtn', 'name' => 'login-button']) ?>
                    </div>
                </div>
           
        </div>
    </div>
     <?php ActiveForm::end(); ?>
</div>
