<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ClientesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Clientes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clientes-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Clientes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombres',
            'ap_paterno',
            'ap_materno',
            'sexo',
            //'estado_civil',
            //'fecha_nac',
            //'calle_num',
            //'estado_id',
            //'municipio_id',
            //'cp',
            //'email:email',
            //'tel_cel',
            //'tel_casa',
            //'nombre_familiar',
            //'tel_familiar',
            //'rfc',
            //'curp',
            //'created_at',
            //'updated_at',
            //'created_user_id',
            //'updated_user_id',
            //'url_foto:url',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
