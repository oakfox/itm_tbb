<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Carreras */

$this->title = 'Crear Carreras';
$this->params['breadcrumbs'][] = ['label' => 'Carreras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carreras-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
