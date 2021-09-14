<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\EstudianteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="estudiante-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'ap') ?>

    <?= $form->field($model, 'am') ?>

    <?= $form->field($model, 'no_de_control') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
