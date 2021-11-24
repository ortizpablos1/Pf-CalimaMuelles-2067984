<?php
require_once('../../usuarios.php');

if(isset($_REQUEST["loginEntrar"])){
    $email = $_POST['email'];
    $contrasena= $_POST['contrasena'];

    $ModeloLogin = new Usuario();
    $login = $ModeloLogin -> login($email, $contrasena);

    if(isset($login)){

        $ver_id_usuario = $login[0]['id_usuario'];
        $_SESSION['id_usuario'] = $ver_id_usuario;

        if($login[0]['id_rol']== 1){
            //echo"bi bien ";
        //header('refresh:3; url=../../spiner/spiner.html');
        header('refresh:3; url=../../template/clienetlte/pages/usuarios.php');

        }elseif($login[0]['id_rol']== 2){

            header('refresh:3; url=../../../Carrito-Compras/');

        }else{

            //header('Location: ../../index.php');
            echo"malll";

        }
    }


}


?>