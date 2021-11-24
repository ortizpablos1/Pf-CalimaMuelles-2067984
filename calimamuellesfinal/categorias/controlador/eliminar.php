<?php
    require_once('../../categorias.php');

    if (isset($_REQUEST["btnEliminar"])) {
        $Modelocategorias = new Categorias();
        $id = $_POST['id'];
        $Modelocategorias->eliminarCategoria($id);
    } else if (isset($_REQUEST["btnCancelar"])) {

        header('Location: ../../template/clienetlte/pages/categorias.php');
    }

?>