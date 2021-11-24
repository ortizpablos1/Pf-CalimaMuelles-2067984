<?php 
    require_once('../../productos.php');

    if (isset($_REQUEST["btnAgregar"])) {
        $Modeloproductos = new Productos();
        $nombre_producto = $_POST['nombre_producto'];
        $codigo = $_POST['codigo'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
    
        $estado = $_POST['estado'];
        $cantidad = $_POST['cantidad'];
        $categoria = $_POST['id_categoria'];
        
        $Modeloproductos->agregarProductos($nombre_producto,$codigo,$descripcion,$precio,$estado,$cantidad,$categoria);

    }else{
        //header('Location: ../vista/modal_agregar.php');
        echo"estamal";
    }
?>