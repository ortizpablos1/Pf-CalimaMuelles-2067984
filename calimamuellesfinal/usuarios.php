
<?php

require_once('conexiones/conexion.php');

session_start();

class Usuario extends Conexion {


    public function __construct()
        {
            $this->db = parent::__construct();
        }
        public function login($email, $contrasena){
            $table = $this->db->prepare("SELECT email, contrasena,id_rol,id_usuario FROM usuario WHERE email = :email AND contrasena = :contrasena");
            $table->bindParam(':email', $email);
            $table->bindParam(':contrasena', $contrasena);
            $table->execute();
            if ($table->rowCount()==1) {

                while($result = $table->fetch()){

                    $rows[]= $result;
                    $_SESSION['email']= $result["email"];
                    $_SESSION['contrasena']= $result["contrasena"];
                }

                return $rows;
                //echo"bien";
                

            }else{

                echo"Error de inicio de sesion!!"."<br>";
                echo "..redireccionando";

                header('refresh:3; url=http://localhost/html/index.php');
            }

        }

        public function verusuario()
        {
            $file_path = null;
            $table = $this->db->prepare("SELECT id_usuario,nombres, apellidos,telefono,email,nombre_rol FROM usuario INNER JOIN rol ON usuario.id_rol=rol.id_rol");
            $table->execute();
            while ($result = $table->fetch()) {
                $file_path[] = $result;
            }
            return $file_path;
        }

        public function editarusuario($id_usuario, $nombres, $apellidos, $telefono, $email, $rol)
        {

            $table = $this->db->prepare("UPDATE usuario SET nombres = :nombres, apellidos = :apellidos, telefono = :telefono, email = :email, id_rol = :id_rol WHERE id_usuario = :id_usuario");
            $table->bindParam(':id_usuario', $id_usuario);
            $table->bindParam(':nombres', $nombres);
            $table->bindParam(':apellidos', $apellidos);
            $table->bindParam(':telefono', $telefono);
            $table->bindParam(':email', $email);
            $table->bindParam(':id_rol', $rol);
            
            if ($table->execute()) {
            
                header('Location: ../vista/index.php');
            } else {
                header('Location: ../vista/edit.php');
            }
        }

    public function registro($nombre, $apellidos, $telefono, $email, $contrasena, $id_rol)
    {
        $table = $this->db->prepare("INSERT INTO usuario(nombres,apellidos,telefono,email,contrasena,id_rol)
    VALUES (:nombres, :apellidos,:telefono,:email,:contrasena,:id_rol)");
        $table->bindParam(":nombres", $nombre);
        $table->bindParam(":apellidos", $apellidos);
        $table->bindParam(":telefono", $telefono);
        $table->bindParam(":email", $email);
        $table->bindParam(":contrasena", $contrasena);
        $table->bindParam(":id_rol", $id_rol);
        if ($table->execute()) {
            header('location: http://localhost/html/index.php');

            echo '
        <script>
        alert("Usuario Registrado");
        window.location ="../index.php";
        </script>';

        } else {
            echo '
        <script>
        alert("Usuario No Almacenado");
        window.location ="http://localhost/html/index.php";
        </script>
        ';
        }

    
}

public function salirusuario(){

    //session_start();
    unset($_SESSION["email"]);
    session_destroy();
    header('location: ../../../index.php');
    //header("refresh:3; url=../");
    echo "Terminando ...";

}







}



?>


