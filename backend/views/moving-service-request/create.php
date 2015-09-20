<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MovingServiceRequest */

$this->title = 'Create Moving Service Request';
$this->params['breadcrumbs'][] = ['label' => 'Moving Service Requests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="moving-service-request-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
