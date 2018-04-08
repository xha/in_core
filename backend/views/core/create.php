<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\Models\Core */

$this->title = 'Crear Sistema';
$this->params['breadcrumbs'][] = ['label' => 'Sistemas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="core-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
