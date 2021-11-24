<?php
//require_once('productos.php');
require_once('categorias.php');
//$instanncia = new Productos();

//$verinstanncia = $instanncia->verproducto();

//print_r($verinstanncia);

$instanncia = new Categorias();
$ver = $instanncia-> eliminarCategoria($id);
print_r($ver);

?>