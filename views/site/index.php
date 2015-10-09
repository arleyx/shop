<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Supermercado';
?>
<div class="site-index">

    <div class="jumbotron">
        <?= Html::img('@web/images/logo.png', ['alt' => 'Supermercado', 'width' => '200']) ?>

        <h1>Supermercado!</h1>

        <p class="lead">Bienvenido a nuestra aplicación de compras online.</p>

        <p><?= Html::a('Registrese', ['site/register'], ['class' => 'btn btn-lg btn-success']) ?></p>
    </div>

</div>
