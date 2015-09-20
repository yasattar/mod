<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <div class="well-sm"><h2 class="title pull-left">Login</h2></div>
    <div class="row">
        <div class="col-lg-10 col-md-10">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
            <?= $form->field($model, 'username') ?>
            <?= $form->field($model, 'password')->passwordInput() ?>
            <?= $form->field($model, 'rememberMe')->checkbox() ?>
            <div style="color:#999;margin:1em 0">
                If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
            </div>
            
             <div class="row">
                <div class="col-lg-8 col-md-9">
                    <div class="form-group">
                        <div class="col-lg-5 col-md-5">
                            <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                        </div>
                        <div class="col-lg-7 col-md-7">
                             <?= Html::a('New User ?  Sign Up',false, ['class' => 'btn btn-info', 'id'=>'newuserbtn', 'name' => 'login-button']) ?>
                         </div>
                    </div>
                </div>
             </div>
            
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
