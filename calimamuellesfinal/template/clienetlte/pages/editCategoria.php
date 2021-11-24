<?php
require_once('template.php');
require_once('../../../categorias.php');

$Modelocategoria = new  Categorias();




$Id = $_GET['Id'];
$informacionAdmin =  $Modelocategoria->veridcategoria($Id);



?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editar</title>
</head>
<style>.btn-infos{
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
        <div class="container col-8">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        
                        <section class="editar">
                            <h1>Editar Categoria</h1>
                            <div class="formulario-login">
                                <form action="../../../categorias/controlador/editar.php" method="POST">
                                    <input type="hidden" name="id" value="<?= $Id; ?>">
                                    <?php

                                    if ($informacionAdmin != null) {
                                        foreach ($informacionAdmin as $info) {


                                    ?>
                                            <h4>Nombre</h4>
                                            <input type="text" name="nombre_categoria" placeholder="nombre" class="form-control" value="<?= $info['nombre_categoria'] ?>"><br>
                                    <?php
                                        }
                                    }
                                    ?>
                                    <br/>

                                    <center><button type="submit" name="btnAgregar" class="btn-infos">Editar</button></center>
                                <br/>
                                
                                </form>

                            </div>
                            <section>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>