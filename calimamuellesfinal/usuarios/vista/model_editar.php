<?php

require_once('../../../usuarios.php');

$Modelousuario = new usuario ();


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
