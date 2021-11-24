<?php
require_once('template.php');
require_once('../../../metosPago.php');

$ModeloMetodo = new MetodoPago();



$Id = $_GET['Id'];
$informacionMetodo =  $ModeloMetodo->veridMetodo($Id);

?>
<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>eliminar Metodo de pago</title>
</head>

<style>
.btn-infos{
    color: black;
    background-color: #fff159;
    border-color: #fff159;
    border-radius:3px;
}
.btn-infos:hover {
    color: white;
    background-color: black;
    
}
.btn-infose{
    color:black;
    background-color: white;
    border:solid 1px gray;
    border-radius:3px;

}
.btn-infose:hover{
    color:black;
    background-color: rgb(197, 151, 151)!important;
    border:solid 1px  rgb(197, 151, 151)!important;
}


</style>


<body>
    <br/>
<section class="content">
        <div class="container col-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
    <section class="eliminar">
    
    <div class="formulario-login">
        <form action="../../../metodoPago/controlador/eliminar.php" method="POST">
            <center><input type="hidden" name="id" value="<?= $Id; ?>">
            <p>¿Estas seguro de eliminar este Metodo De Pago?</p>
            <?php

                if ($informacionMetodo != null) {
                    foreach ($informacionMetodo as $info) {
                        echo $info['nombre']."<br><br>"; 
                    }
                }
            ?>
            <button type="submit" name="btnCancelar" class=" btn-infos">Cancelar</button>
            <button type="submit" name="btnEliminar"class=" btn-infose">Eliminar</button>
            
            </center>
            <br/>
        </form>

    </div>
</section>
            </div>
            </div>
            </div>
            </div>
            </section>
</body>

</html>