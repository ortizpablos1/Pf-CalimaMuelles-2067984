<?php

require_once('../../../metosPago.php');
$modeloMetodos = new MetodoPago();

//$Id =$_GET ['id'];
$infometodo = $modeloMetodos->veridMetodo($Id);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form action="../../../metodoPago/controlador/eliminar.php"  method="POST">
    <div class="modal fade" id="dataDelete" role="dialog" aria-labelledby="exampleModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
        <input type="hidden" name="id" value="<?= $Id?>">
          
          <h2 class="text-center text-muted">Estas seguro de eliminar el Metodo de pago?: </h2>
          
          <?php
          if($infometodo != null){

            foreach($infometodo as $info){
              echo $info['nombre']."<br><br>";

            }
          }
          
          ?>
        
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
</body>
</html>