
<?php

require_once('conexion/conexion.php');


class Clientes extends Conexion
{


    public function __construct()
    {
        $this->db = parent::__construct();
    }


    public function salirusuario()
    {

        //session_start();
        unset($_SESSION["email"]);
        session_destroy();
        header('location: ../../index.php');
        //header("refresh:3; url=../");
        echo "Terminando ...";
    }

    public function editarPerfil($id_usuario, $nombres, $apellidos, $telefono, $email)
    {

        $table = $this->db->prepare("UPDATE usuario SET nombres = :nombres, apellidos=:apellidos,telefono =:telefono,email= :email WHERE id_usuario =:id");
        $table->bindParam(':id', $id_usuario);
        $table->bindParam(':nombres', $nombres);
        $table->bindParam(':apellidos', $apellidos);
        $table->bindParam(':telefono', $telefono);
        $table->bindParam(':email', $email);

        if ($table->execute()) {
            echo "se actualizo corectamente";
            
        } else {
            echo " opp no se actualizo";
        }
    }

    public function veridusuario($id){
        $rows = null;
        $table = $this->db->prepare("SELECT id_usuario,nombres,apellidos,telefono,email FROM usuario WHERE id_usuario = :id");
        $table->bindParam(':id', $id);
        $table->execute();
        while ($result = $table->fetch()) {
            $rows[] = $result;
        }
        return $rows;
    }
}



?>


