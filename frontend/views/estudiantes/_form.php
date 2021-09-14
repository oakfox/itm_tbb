<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\bootstrap4\Modal;

/* @var $this yii\web\View */
/* @var $model common\models\Estudiantes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="estudiantes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_de_control')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'am')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel')->widget(\yii\widgets\MaskedInput::class, [
        'mask' => '(999)-99-99999',
    ]) ?>


    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'fecha_nacimiento')->widget(\yii\jui\DatePicker::classname(), [
        'language' => 'es',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>

    <?= $form->field($model, 'carrera_id')->dropDownList(\common\models\Carreras::getOcarreras(),['prompt'=>'Selecciona...']); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
