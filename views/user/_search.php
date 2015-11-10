<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID de Usuario') ?>

    <?= $form->field($model, 'Cuenta') ?>

    <?= $form->field($model, 'Nombre de usuario') ?>

    <?= $form->field($model, 'Documento') ?>

    <?php // echo $form->field($model, 'use_address') ?>

    <?php // echo $form->field($model, 'use_city') ?>

    <?php // echo $form->field($model, 'use_mail') ?>

    <?php // echo $form->field($model, 'use_phone') ?>

    <?php // echo $form->field($model, 'use_cell') ?>

    <?php // echo $form->field($model, 'use_pay') ?>

    <?php // echo $form->field($model, 'use_auth') ?>

    <?php // echo $form->field($model, 'use_access') ?>

    <?php // echo $form->field($model, 'use_role') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
