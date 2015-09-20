<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MovingServiceProvider */

$this->title = 'Create Moving Service Provider';
$this->params['breadcrumbs'][] = ['label' => 'Moving Service Providers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="moving-service-provider-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
