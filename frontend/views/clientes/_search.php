<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ClientesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clientes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nombres') ?>

    <?= $form->field($model, 'ap_paterno') ?>

    <?= $form->field($model, 'ap_materno') ?>

    <?= $form->field($model, 'sexo') ?>

    <?php // echo $form->field($model, 'estado_civil') ?>

    <?php // echo $form->field($model, 'fecha_nac') ?>

    <?php // echo $form->field($model, 'calle_num') ?>

    <?php // echo $form->field($model, 'estado_id') ?>

    <?php // echo $form->field($model, 'municipio_id') ?>

    <?php // echo $form->field($model, 'cp') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'tel_cel') ?>

    <?php // echo $form->field($model, 'tel_casa') ?>

    <?php // echo $form->field($model, 'nombre_familiar') ?>

    <?php // echo $form->field($model, 'tel_familiar') ?>

    <?php // echo $form->field($model, 'rfc') ?>

    <?php // echo $form->field($model, 'curp') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'created_user_id') ?>

    <?php // echo $form->field($model, 'updated_user_id') ?>

    <?php // echo $form->field($model, 'url_foto') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
