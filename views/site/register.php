<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

if (Yii::$app->session->hasFlash('success')) {
    echo '<div class="alert alert-success">', Yii::$app->session->getFlash('success'), '</div>';
}

?>

<h3>Formulario de Registro</h3>
<p>&nbsp;</p>

<div class="col-lg-5">
    <?php $f_registerForm = ActiveForm::begin(['id' => 'register-form']); ?>
        <legend>Datos personales</legend>
        <fieldset>
            <?= $f_registerForm->field($m_registerForm, 'use_name')->label('Nombre:'); ?>
            <?= $f_registerForm->field($m_registerForm, 'use_document')->label('Documento de identidad:'); ?>
            <?= $f_registerForm->field($m_registerForm, 'use_address')->label('Dirección:'); ?>
            <?= $f_registerForm->field($m_registerForm, 'use_city')->label('Ciudad:'); ?>
            <?= $f_registerForm->field($m_registerForm, 'use_mail')->label('Correo Electronico:'); ?>
            <?= $f_registerForm->field($m_registerForm, 'use_phone')->label('Telefono:'); ?>
            <?= $f_registerForm->field($m_registerForm, 'use_cell')->label('Celular:'); ?>
        </fieldset>

        <p>&nbsp;</p>
        <legend>Cuenta</legend>
        <fieldset>
            <?= $f_registerForm->field($m_registerForm, 'use_login')->label('Usuario:'); ?>
            <?= $f_registerForm->field($m_registerForm, 'use_password')->passwordInput()->label('Contraseña:'); ?>
            <?= $f_registerForm->field($m_registerForm, 'use_pay')->dropDownList(['Recibo','Tarjeta de credito','Tarjeta de debito'])->label('Forma de pago:'); ?>
        </fieldset>

        <?= Html::submitButton('Enviar', ['class' => 'btn btn-success']); ?>

    <?php ActiveForm::end(); ?>
</div>
