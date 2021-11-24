<?php

require_once('../../metosPago.php');

if(isset($_REQUEST["btnEliminar"])){

    $modeloMetodos = new MetodoPago();
    $id = $_POST['id'];
    $modeloMetodos->eliminarMetodo($id);

    
}else if(isset($_REQUEST["btnCancelar"])){

    header('Location: ../../template/clienetlte/pages/metodosPago.php');
}
?>
