<?php

/* @var $this yii\web\View */

$this->title = 'Innova Core';//Yii::$app->name;

?>
<div class="main-aside2">
    <div style="display: none" id="sistemas"><?= $sistemas; ?></div>
    <div class="row" id="row">
    </div>
</div>
<script type="text/javascript">
    $(function() {
        var bg = ["blue", "green", "red", "purple", 'olive', 'teal', 'yellow', 'orange'];
        var sistemas = JSON.parse(document.getElementById('sistemas').innerHTML);
        var i;
        if (sistemas!="") {
            var div = document.getElementById('row');
            for (i=0; i < sistemas.length; i++) {
                var div1 = document.createElement('div');
                div1.className = "col-lg-3 col-xs-6";
                
                var div2 = document.createElement('div');
                var rand = bg[(Math.random() * bg.length) | 0];
                div2.className = "small-box bg-"+rand;
                
                var div3 = document.createElement('div');
                div3.className = "inner";
                
                var h1 = document.createElement('h3');
                h1.innerHTML = i+1;
                
                var p1 = document.createElement('p');
                p1.innerHTML = sistemas[i].nombre_sistema;
                
                var a1 = document.createElement('a');
                a1.innerHTML = "Ir al Módulo";
                a1.href = "../../../"+sistemas[i].ruta+"/frontend/web";
                a1.target = "_blank";
                a1.className = "small-box-footer";
                var i2 = document.createElement('i');
                i2.className = "fa fa-arrow-circle-right";
                
                var div4 = document.createElement('div');
                div4.className = "icon";
                
                var i1 = document.createElement('i');
                i1.className = "fa fa-folder-open-o";
                
                div4.appendChild(i1);
                div3.appendChild(h1);
                div3.appendChild(p1);
                a1.appendChild(i2);
                div2.appendChild(div3);
                div2.appendChild(div4);
                div2.appendChild(a1);
                div1.appendChild(div2);
                div.appendChild(div1);
            }
        }
    });
</script>
<!--<div class="col-lg-3 col-xs-6">

          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>New Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>-->