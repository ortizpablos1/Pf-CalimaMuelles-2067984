<?php
require_once('template.php');
require_once('../../../productos.php');
require_once('../../../categorias.php');
$moldeloCategorias = new Categorias();
$Modeloproductos = new  Productos();




$Id = $_GET['Id'];
$informacionAdmin =  $Modeloproductos->veridproducto($Id);



?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editar</title>
</head>
<style>
    .btn-infos {
        color: black;
        background-color: #fff159;
        border-color: #fff159;
    }

    .btn-infos:hover {
        color: white;
        background-color: black;

    }
</style>

<body>
    <br/>
    <section class="content">
        <div class="container col-7">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <section class="editar">
                            <h1>Editar Producto</h1>
                            <div class="formulario-login">
                                <form action="../../../productos/controlador/editar.php" method="POST">
                                    <input type="hidden" name="id" value="<?= $Id; ?>">
                                    <?php

                                    if ($informacionAdmin != null) {
                                        foreach ($informacionAdmin as $info) {


                                    ?>
                                            <h4>Nombre</h4>
                                            <input type="text" name="nombre_producto" placeholder="nombre" class="form-control" value="<?= $info['nombre_producto'] ?>"><br>
                                            <h4>Codigo</h4>
                                            <input type="text" name="codigo" placeholder="nombre" class="form-control" value="<?= $info['codigo'] ?>"><br>
                                            <h4>Descripcion</h4>
                                            <input type="text" name="descripcion" placeholder="nombre" class="form-control" value="<?= $info['descripcion'] ?>"><br>
                                            <h4>Precio</h4>
                                            <input type="text" name="precio" placeholder="nombre" class="form-control" value="<?= $info['precio'] ?>"><br>
                                            <h4>Estado</h4>
                                            <select name="estado" id="" class="form-control">

                                                <option>Disponible</option>
                                                <option>Agotado</option>

                                            </select>
                                            <h4>Cantidad</h4>
                                            <input type="text" name="cantidad" placeholder="cantidad" class="form-control" value="<?= $info['cantidad'] ?>"><br>
                                            <h4>categoria</h4>
                                            <select name="id_categoria" id="" class="form-control">
                                                <?php
                                                $listarcategorias = $moldeloCategorias->vercategoria();
                                                if ($listarcategorias != null) {
                                                    foreach ($listarcategorias as $categorias) {
                                                ?>
                                                        <option value="<?= $categorias['id_categoria'] ?>"><?= $categorias['nombre_categoria']; ?></option>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </select>

                                    <?php
                                        }
                                    }
                                    ?>
                                    <br/>

                                    <center><button type="submit" name="btnEditar" class="btn-infos">Editar</button><center>
                                <br/>
                                </form>

                            </div>
                            <section>
                    </div>
                </div>
            </div>
    </section>

</body>

</html>