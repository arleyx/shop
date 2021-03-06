<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Provider */

$this->title = 'Update Provider: ' . ' ' . $model->sub_id;
$this->params['breadcrumbs'][] = ['label' => 'Providers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sub_id, 'url' => ['view', 'id' => $model->sub_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="provider-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
