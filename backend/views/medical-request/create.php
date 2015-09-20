<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MedicalRequest */

$this->title = 'Create Medical Request';
$this->params['breadcrumbs'][] = ['label' => 'Medical Requests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="medical-request-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
