<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model common\models\Clientes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clientes-form">

    <?php $form = ActiveForm::begin(); ?>
<h1>
    "Ejemplo de etiqueta"
</h1>
    <div class="row">
        <div class="col-lg-4">
            <?= $form->field($model, 'nombres')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-4">
            <?= $form->field($model, 'ap_paterno')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-4">
            <?= $form->field($model, 'ap_materno')->textInput(['maxlength' => true]) ?>
        </div>
    </div>





    <?= $form->field($model, 'sexo')->radioList(['H'=>'Hombre','M'=>'Mujer']) ?>

    <?= $form->field($model, 'estado_civil')->dropDownList([
            'S'=>'Soltero(a)',
            'C'=>'Casado(a)',
            'V'=>'Viudo(a)',
            'D'=>'Divorciado(a)',
            'U'=>'Unión Libre',
    ]) ?>

    <?= $form->field($model, 'fecha_nac')->widget(\yii\jui\DatePicker::classname(), [
        'language' => 'es',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>

    <?= $form->field($model, 'calle_num')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'estado_id')->dropDownList(\common\models\Estados::getOestados(),['prompt'=>"Selecciona..."]) ?>

    <?= $form->field($model, 'municipio_id')->textInput() ?>

    <?= $form->field($model, 'cp')->widget(\yii\widgets\MaskedInput::class, [
        'mask' => '99999',
    ]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel_cel')->widget(\yii\widgets\MaskedInput::class, [
        'mask' => '(999)-999-9999',
    ]) ?>

    <?= $form->field($model, 'tel_casa')->widget(\yii\widgets\MaskedInput::class, [
        'mask' => '(999)-999-9999',
    ]) ?>

    <?= $form->field($model, 'nombre_familiar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel_familiar')->widget(\yii\widgets\MaskedInput::class, [
        'mask' => '(999)-999-9999',
    ]) ?>


    <?= $form->field($model, 'rfc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'curp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url_foto')->widget(FileInput::classname(), [
        'options' => ['accept' => 'image/*'],
        'pluginOptions'=>['allowedFileExtensions'=>['jpeg','jpg','gif','png'],'showUpload' => false,],
    ]);   ?>




    <div style="display: none">
        <?= $form->field($model, 'created_at')->textInput() ?>

        <?= $form->field($model, 'updated_at')->textInput() ?>

        <?= $form->field($model, 'created_user_id')->textInput() ?>

        <?= $form->field($model, 'updated_user_id')->textInput() ?>


    </div>


    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
