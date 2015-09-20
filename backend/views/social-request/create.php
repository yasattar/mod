<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SocialRequest */

$this->title = 'Create Social Request';
$this->params['breadcrumbs'][] = ['label' => 'Social Requests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="social-request-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
