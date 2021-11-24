<?php 
    require_once('../../productos.php');

    if ($_POST) {
        $Modeloproductos = new Productos();
        $id = $_POST['id'];
        $nombre_producto = $_POST['nombre_producto'];
        $codigo = $_POST['codigo'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        
        $estado = $_POST['estado'];
        $cantidad = $_POST['cantidad'];
        $id_categoria = $_POST['id_categoria'];
    
        $Modeloproductos->editarProducto($id,$nombre_producto,$codigo,$descripcion,$precio,$estado,$cantidad,$id_categoria);

        //echo"biennnnnnnn";
    } else {
        //header('Location: ../../index.php');
        echo"esta mal";
    }
?>
