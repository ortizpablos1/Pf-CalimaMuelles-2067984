<?php 
    require_once('../../categorias.php');

    if (isset($_REQUEST["btnAgregar"])) {
        $Modelocategoria = new Categorias();
        $nombre = $_POST['nombre_categoria'];
        
        $Modelocategoria->agregarCategoria($nombre);

    }else{
        //header('Location: ../vista/modal_agregar.php');
        echo"estamal";
    }
?>