<?php

require_once('../../../imagen.php');

$modeloimagen = new Imagenes;
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
    .h4,
    h4 {
        font-size: 1.5rem;
        position: relative;
        left: -150px;
    }

    .close,
    .mailbox-attachment-close {
        float: right;
        font-size: 1.5rem;
        font-weight: 700;
        line-height: 1;
        color: #000;
        text-shadow: 0 1px 0 #fff;
        opacity: .5;
        position: relative;
        left: 280px !important;
    }

    .prima {
        position: relative;
        left: -170px;
        color: black;
        background-color: #fff159 !important;
        border-color: #fff159 !important;
        box-shadow: none;
        color: black;
        width: 100px;
    }

    .fade {
        text-align: initial;
    }
</style>

<body>
    <center><br /><br /><br />
        <form action="http://localhost/html/calimamuellesfinal/imagenes/controlador/controladorAgregar.php" method="POST" enctype="multipart/form-data">
            <div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="exampleModalLabel">Agregar Imagen de Producto</h4>
                        </div>
                        <div class="modal-body">
                            <div id="datos_ajax_register"></div>
                            <div class="form-group">
                                <label for="codigo0" class="control-label">Elija Imagen:</label>
                                <input type="file" name="imagen" class="form-control">
                            </div>



                            <div id="datos_ajax_register"></div>
                            <div class="form-group">
                                <label for="codigo0" class="control-label">Nombre Imagen:</label>
                                <input class="form-control" type="text" name="nombreimagen"><br /><br />
                            </div>


                            <label for="codigo0" class="control-label">Productos:</label>
                            <select type="text" name="id_productos" class="form-control">
                                <?php
                                $listarproductos = $modeloimagen->verproductos();
                                if ($listarproductos != null) {
                                    foreach ($listarproductos as $productos) {
                                ?>
                                        <option value="<?= $productos['id_productos'] ?>"><?= $productos['nombre_producto']; ?></option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="btnAgregar" class="btn prima">Agregar</button>
                        </div>
                        <!--<input type="submit" name="" value="Aceptar">-->
                    </div>
                </div>
            </div>
        </form>
    </center>
</body>

</html>