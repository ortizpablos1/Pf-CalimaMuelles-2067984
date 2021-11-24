<?php 
    require_once('../../agregarAdmin.php');

    if (isset($_REQUEST["btnAgregar"])) {
        $ModeloAdmin = new Admin();
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $contrasena = $_POST['contrasena'];
        $rol = $_POST['id_rol'];
        
        
        $ModeloAdmin->insertAdmin($nombres, $apellidos,$telefono, $email, $contrasena, $rol);
        header('Location: ../../template/clienetlte/pages/usuarios.php');
        //echo"bien";
    }else{  
        //header('Location: ../../index.php');
        echo"mal";
    }
?>