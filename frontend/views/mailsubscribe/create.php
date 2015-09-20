<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Mailsubscribe */

$this->title = 'Create Mailsubscribe';
$this->params['breadcrumbs'][] = ['label' => 'Mailsubscribes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mailsubscribe-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
