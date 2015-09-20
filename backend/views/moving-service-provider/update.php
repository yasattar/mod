<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MovingServiceProvider */

$this->title = 'Update Moving Service Provider: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Moving Service Providers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="moving-service-provider-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
