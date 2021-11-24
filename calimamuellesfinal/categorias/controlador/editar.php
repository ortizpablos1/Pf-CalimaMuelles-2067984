<?php 
    require_once('../../categorias.php');

    if ($_POST) {
        $Modelocategoria = new Categorias();
        $id = $_POST['id'];
        $nombre = $_POST['nombre_categoria'];
    
        $Modelocategoria->editarcategorias($id,$nombre);

        //echo"biennnnnnnn";
    } else {
        //header('Location: ../../index.php');
        echo"esta mal";
    }
?>
