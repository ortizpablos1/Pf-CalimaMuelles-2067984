<?php

require_once('../../../metosPago.php');

$ModelometodoPago = new MetodoPago();

/*$Id =$_GET ['id'];
$listarmetodos = $ModelometodoPago->veridMetodo($Id);*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  .h4, h4 {
    font-size: 1.5rem;
    position: relative;
    left: -100px;
  }
    .close, .mailbox-attachment-close {
        float: right;
        font-size: 1.5rem;
        font-weight: 700;
        line-height: 1;
        color: #000;
        text-shadow: 0 1px 0 #fff;
        opacity: .5;
        position: relative;
        left: -200px !important;
    }
    .prima{
        position: relative;
        left: -170px;
        color: black;
        background-color: #fff159!important;
        border-color: #fff159!important;
        box-shadow: none;
        color: black;
        width: 100px;
    }
    
  </style>

<body>
<section>
<form action="../../../metodoPago/controlador/agregar.php" method="POST">
    <div class="modal fade" id="dataRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="exampleModalLabel">Agregar Metodo de Pago</h4>
          </div>
          <div class="modal-body">
          <div id="datos_ajax_register"></div>
              <div class="form-group">
                <label for="codigo0" class="control-label">Nombre:</label>
                <input type="text" class="form-control" id="codigo0" name="nombre" >
          </div>
		  
      </div>
      <div class="modal-footer">
        <button type="submit" name="btnAgregar" class="btn prima">Agregar</button>
      </div>
    </div>
  </div>
</div>
</form>

</body>
  </section>

<section>
  <form action="../../../metodoPago/controlador/eliminar.php"  method="GET">
    <div class="modal fade" id="dataDelete" role="dialog" aria-labelledby="exampleModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
        <input type="hidden" name="id" value="<?= $Id?>">
          <h2 class="text-center text-muted">Estas seguro de eliminar el Metodo de pago?: </h2>

          <?php 
          if($listarmetodos != null){

            foreach($listarmetodos as $info){
              echo $info['nombre']."<br><br>";

            }
          }
          
          ?>
         <input type="hidden" name="id" value="<?= $Id?>">
          <p class="lead text-muted text-center" style="display: block;margin:10px">Esta acción eliminará de forma permanente el registro. Deseas continuar?</p>
          <div class="modal-footer">
            <button type="submit" name="btnCancelar" class="btn btn-lg btn-default" data-dismiss="modal">Cancelar</button>
            <button type="submit" name="btnEliminar" class="btn btn-lg btn-primary">Aceptar</button>
          </div>
        </div>
      </div>
    </div>
</form>
<script>
    $(document).ready(function() {
      load(1);
    });
  </script>
</section>
</html>