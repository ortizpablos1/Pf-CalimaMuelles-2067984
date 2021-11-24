<?php
     require_once('../../productos.php');

    if (isset($_REQUEST["btnEliminar"])) {
        $Modeloproducto = new Productos();
        $id = $_POST['id'];
        $Modeloproducto->eliminarProducto($id);
    } else if (isset($_REQUEST["btnCancelar"])) {

        header('Location: ../../template/clienetlte/pages/productos.php');
    }

?>