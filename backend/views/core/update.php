<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\Models\Core */

$this->title = 'Actualizar Sistema: ' . $model->id_core;
$this->params['breadcrumbs'][] = ['label' => 'Sistemas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_core, 'url' => ['view', 'id' => $model->id_core]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="core-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
