<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Usuario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Contraseña')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Documento de identidad')->textInput() ?>

    <?= $form->field($model, 'Dirección')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Ciudad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Correo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Teléfono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Celular')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Forma de pago')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Rol')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
