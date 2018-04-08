<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\Models\Core */

$this->title = $model->id_core;
$this->params['breadcrumbs'][] = ['label' => 'Sistemas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="core-view">

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id_core], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Desactivar', ['delete', 'id' => $model->id_core], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Confirmar Desactivado',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_core',
            'base_datos',
            'usuario',
            //'clave',
            'ip',
            'puerto',
            'nombre_sistema',
            'sigla_sistema',
            'ruta',
            'activo:boolean',
        ],
    ]) ?>

</div>
