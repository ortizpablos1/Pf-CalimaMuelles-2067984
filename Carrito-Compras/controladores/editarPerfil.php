<?php 
    require_once('../usuarios.php');

    if ($_POST) {
        $ModeloCliente = new Clientes();
        $id_usuario = $_POST['id'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        
    
        $ModeloCliente->editarPerfil($id_usuario, $nombres, $apellidos, $telefono, $email);

        //echo"biennnnnnnn";
    } else {
        //header('Location: ../../index.php');
        echo"esta mal";
    }
?>
