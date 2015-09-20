<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AppUser */

$this->title = 'Update App User: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'App Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="app-user-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
