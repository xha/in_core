<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\Models\CoreSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sistemas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="core-index">

    <p>
        <?= Html::a('Crear Sistema', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'rowOptions' => function ($model, $index, $widget, $grid){
            if($model->activo == 0) return ['style' => 'background-color: #FADCAC'];
        },
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'id_core',
            'base_datos',
            //'usuario',
            //'clave',
            'ip',
            //'puerto',
            'nombre_sistema',
            'sigla_sistema',
            'ruta',
            'activo:boolean',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
