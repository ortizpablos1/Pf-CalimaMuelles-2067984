<?php
require_once('../../../productos.php');
$modeloproductos = new Productos;
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
    left: -150px;
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
        left: -280px !important;
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

<form action="../../../productos/controlador/agregar.php" method="POST">
    <div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="exampleModalLabel">Agregar Producto</h4>
          </div>
          <div class="modal-body">
          <div id="datos_ajax_register"></div>
              <div class="form-group">
                <label for="codigo0" class="control-label">Nombre:</label>
                <input type="text" class="form-control" id="codigo0" name="nombre_producto" >
          </div>
          <div id="datos_ajax_register"></div>
              <div class="form-group">
                <label for="codigo0" class="control-label">Codigo:</label>
                <input type="text" class="form-control" id="codigo0" name="codigo"  >
          </div>
          <div id="datos_ajax_register"></div>
              <div class="form-group">
                <label for="codigo0" class="control-label">Precio:</label>
                <input type="text" class="form-control" id="codigo0" name="precio"  >
        </div>
        <div id="datos_ajax_register"></div>
              <div class="form-group">
                <label for="codigo0" class="control-label">Cantidad:</label>
                <input type="text" class="form-control" id="codigo0" name="cantidad"  >
        </div>
        <div id="datos_ajax_register"></div>
              <div class="form-group">
                <label for="codigo0" class="control-label">Descripcion:</label>
                <input type="text" class="form-control" id="codigo0" name="descripcion"  >
          </div>
        <label for="codigo0" class="control-label">Estado:</label>
        <select name="estado" id="" class="form-control">
        
                        <option>activo</option>
                        <option>inactivo</option>
               
        </select>
        <br>
        <label for="codigo0" class="control-label">Categoria:</label>
        <select name="id_categoria" id="" class="form-control">
                <?php
                $listarcategorias = $modeloproductos->vercategorias();
                if ($listarcategorias != null) {
                    foreach ($listarcategorias as $categorias) {
                ?>
                        <option value="<?= $categorias['id_categoria'] ?>"><?= $categorias['nombre_categoria']; ?></option>
                <?php
                    }
                }
                ?>
        </select><br>

       
      </div>
      <div class="modal-footer">
        <button type="submit" name="btnAgregar" class="btn prima">Agregar</button>
      </div>
    </div>
  </div>
</div>
</form>




    
</body>
</html>