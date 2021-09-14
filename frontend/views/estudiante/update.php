<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Estudiante */

$this->title = 'Update Estudiante: ' . $model->no_de_control;
$this->params['breadcrumbs'][] = ['label' => 'Estudiantes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_de_control, 'url' => ['view', 'no_de_control' => $model->no_de_control]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="estudiante-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
