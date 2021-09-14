<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Clientes */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Clientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="clientes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nombres',
            'ap_paterno',
            'ap_materno',
            'sexo',
            'estado_civil',
            'fecha_nac',
            'calle_num',
            'estado_id',
            'municipio_id',
            'cp',
            'email:email',
            'tel_cel',
            'tel_casa',
            'nombre_familiar',
            'tel_familiar',
            'rfc',
            'curp',
            'created_at',
            'updated_at',
            'created_user_id',
            'updated_user_id',
            'url_foto:url',
        ],
    ]) ?>

</div>
