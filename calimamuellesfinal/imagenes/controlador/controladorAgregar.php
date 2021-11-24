<?php

include_once("conexion2.php");
$nombre =$_POST['nombreimagen'];
$productos =$_POST['id_productos'];
$imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
//$rol_id =$_POST['rol_id'];
$query="INSERT INTO imagenesproductos(nombreimagen,id_productos, imagen) VALUES('$nombre','$productos','$imagen')";
$resultado = $conexion->query($query);


if($query ==true){
    header('Location: ../../template/clienetlte/pages/imagenes.php');
}else{
    header('Location: ../../template/clienetlte/pages/imagene.php');
}




?>