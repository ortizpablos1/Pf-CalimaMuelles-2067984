<?php
 require_once('../../usuarios.php');
 

if (isset($_REQUEST['registro'])) {
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $contrasena = $_POST['contrasena'];
        //contraseña encriptada
        $contrasena = hash('sha512', $contrasena);
        // $verifyPassword = password_verify($contrasena, $hash);
        $id_rol = $_POST['id_rol'];
        $objUser = new Usuario();
        $objUser->registro($nombres, $apellidos, $telefono, $email, $contrasena, $id_rol);
        echo"bien";

        $verificar_email = mysqli_query($conexion, "SELECT * FROM usuario WHERE email= '$email'");
        if (mysqli_num_rows($verificar_email) > 0) {
                echo '
        <script>
        alert("Este email ya existe,intenta con uno diferente");
        window.location = "../login.php";
        </script>

        ';
        }
}
?>