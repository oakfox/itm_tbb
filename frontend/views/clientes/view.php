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
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

        <img src="<?= \yii\helpers\Url::base() ?>/uploads/img/<?= $model->url_foto ?>" width="150px" class="rounded float-left" alt="...">



    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nombres',
            'ap_paterno',
            'ap_materno',
            'nsexo',
            'nestado_civil',
            'fecha_nac',
            'calle_num',
            'nestado_id',
            'municipio_id',
            'cp',
            'email:email',
            'tel_cel',
            'tel_casa',
            'nombre_familiar',
            'tel_familiar',
            'rfc',
            'curp',
            //'url_foto:url',
        ],
    ]) ?>

</div>
