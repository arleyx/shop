<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\User;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Supermercado',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Inicio', 'url' => ['/site/index']],
            Yii::$app->user->isGuest ?
                ['label' => 'Ingresar', 'url' => ['/site/login']] :
                [
                    //'label' => 'Salir (' . Yii::$app->user->identity->username . ')',
                    'label' => 'Salir (' . Yii::$app->user->identity->use_name . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ],

            ['label' => 'Productos', 'url' => ['/product']],
            ['label' => 'Registrese', 'url' => ['/site/register']],
            ['label' => 'Contacto', 'url' => ['/site/contact']]
        ],
    ]);
    NavBar::end();
    ?>
<a href="#">asdasdas</a>
<?php
/*
isset(Yii::$app->user->identity->use_id) && User::isRole(User::ROLE_ADMIN) ?
    '<a href="/user">Usuarios</a>' :
    '<a href="/user/view">Mi perfil</a>'
*/
?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Supermercado <?= date('Y') ?>. Calidad de software</p>

        <p class="pull-right"><?= ''#Yii::powered() ?><strong>Integrantes:</strong> Jhon Roncancio, Arley Archila</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
