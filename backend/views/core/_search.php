<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\Models\CoreSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="core-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_core') ?>

    <?= $form->field($model, 'base_datos') ?>

    <?= $form->field($model, 'usuario') ?>

    <?= $form->field($model, 'clave') ?>

    <?= $form->field($model, 'ip') ?>

    <?php // echo $form->field($model, 'puerto') ?>

    <?php // echo $form->field($model, 'nombre_sistema') ?>

    <?php // echo $form->field($model, 'sigla_sistema') ?>

    <?php // echo $form->field($model, 'activo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
