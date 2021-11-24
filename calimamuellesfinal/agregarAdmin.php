<?php
require_once('conexiones/conexion.php');




class Admin  extends Conexion{

    public function __construct(){

        $this->db = parent :: __construct();
    
    }
    public function insertAdmin($nombres, $apellidos,$telefono, $email, $contrasena, $rol){
        $table = $this->db->prepare("INSERT INTO usuario(nombres, apellidos,telefono, email, contrasena, id_rol) VALUES(:nombres, :apellidos,:telefono, :email, :contrasena, :id_rol)"); 
        $table->bindParam(':nombres', $nombres);
        $table->bindParam(':apellidos', $apellidos);
        $table->bindParam(':telefono', $telefono);
        $table->bindParam(':email', $email);
        $table->bindParam(':contrasena', $contrasena);
        $table->bindParam(':id_rol', $rol);
        
        if ($table->execute()) {

            //echo"bien";
            header('Location: ../../template/clienetlte/pages/usuario.php ');
        }else{
            //header('Location: ../vista/add.php');
            echo"mal";
        }
    }



}




?>