<?php 
    require_once('../../metosPago.php');

    if (isset($_REQUEST["btnAgregar"])) {
        $ModeloMetodosPago = new MetodoPago();
        $nombre = $_POST['nombre'];
        
        $ModeloMetodosPago->agregarmetodoPago($nombre);

    }else{
        //header('Location: ../vista/modal_agregar.php');
        echo"estamal";
    }
?>