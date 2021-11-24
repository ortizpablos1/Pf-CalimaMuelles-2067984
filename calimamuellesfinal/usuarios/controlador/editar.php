<?php 
    require_once('../../usuarios');

    if ($_POST) {
        $Modelousuario = new usuario();
        $id = $_POST['id_usuario'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $rol = $_POST['rol'];
        
        $Modelousuario->editarusuario($id_usuario, $nombres, $apellidos, $telefono, $email, $rol);
    } else {
        header('Location: ../../index.php');
        
    }
?>