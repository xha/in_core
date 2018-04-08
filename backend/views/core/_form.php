<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\Models\Core */
/* @var $form yii\widgets\ActiveForm */
$id="";

if (isset($_GET['id'])==1) $id = $_GET['id'];
?>

<div class="core-form">

    <?php $form = ActiveForm::begin(); ?>

    <input type="hidden" id="id" value="<?= $id ?>" />
    <?= $form->field($model, 'base_datos')->textInput() ?>

    <?= $form->field($model, 'usuario')->textInput() ?>

    <?= $form->field($model, 'clave')->textInput(['type' => 'password', 'value' => '']) ?>

    <?= $form->field($model, 'ip')->textInput() ?>

    <?= $form->field($model, 'puerto')->textInput(['value' => '1433']) ?>

    <?= $form->field($model, 'nombre_sistema')->textInput() ?>

    <?= $form->field($model, 'sigla_sistema')->textInput() ?>
    
    <?= $form->field($model, 'ruta')->textInput() ?>

    <?= $form->field($model, 'activo')->dropDownList(['1' => 'SI', '0' => 'NO']); ?>

    <div class="form-group">
        <?= Html::submitButton('Actualizar', ['class' => 'btn btn-success', 'onclick'=>'js:encripta();']) ?>
        <label class='btn btn-default' onclick="probar()">Probar Conexión</label>
        <img id='img_load' style='visibility: hidden' src='../../../img/preloader.gif' />
    </div>
    <h3 style="color: red" id='probar_conexion'></h3>
    
    <?php ActiveForm::end(); ?>
</div>
<script type="text/javascript">
    function encripta(){
        var clave = document.getElementById('core-clave');

        if (clave.value!="") {
            clave.value = btoa(clave.value);
        }
    }
    function probar() {
        var bd = document.getElementById('core-base_datos').value;
        var ip = document.getElementById('core-ip').value;
        var clave = atob(document.getElementById('core-clave').value);
        var puerto = document.getElementById('core-puerto');
        var usuario = document.getElementById('core-usuario').value;
        var probar_conexion = document.getElementById('probar_conexion');
        var img_load = document.getElementById('img_load');
        probar_conexion.innerHTML = "";
        
        //btoa(clave);atob(test);
        if ((bd!="") && (ip!="") && (clave!="") && (usuario!="")) {
            img_load.style.visibility = "visible";
            if (puerto.value=="") puerto.value="1433";
            $.get('../core/buscar-conexion',{bd : bd, ip : ip, clave : clave, usuario : usuario, puerto : puerto.value},function(data){
                probar_conexion.innerHTML = data;
                img_load.style.visibility = "hidden";
            });
        }
    }
</script>
