<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usuarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'use_id',
            'use_login',
            'use_password',
            'use_name',
            'use_document',
            // 'use_address',
            // 'use_city',
            // 'use_mail',
            // 'use_phone',
            // 'use_cell',
            // 'use_pay',
            // 'use_auth',
            // 'use_access',
            // 'use_role',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
