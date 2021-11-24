
<?php

require_once('conexiones/conexion.php');



class Categorias extends Conexion {


    public function __construct()
        {
            $this->db = parent::__construct();
        }

        public function vercategoria()
        {
            $file_path = null;
            $table = $this->db->prepare("SELECT id_categoria, nombre_categoria FROM categoria ");
            $table->execute();
            while ($result = $table->fetch()) {
                $file_path[] = $result;
            }
            return $file_path;
        }

        public function agregarCategoria($nombre){
            $table = $this->db->prepare("INSERT INTO categoria (nombre_categoria) VALUES (:nombre_categoria);"); 
            $table->bindParam(':nombre_categoria', $nombre);
            
            
            if ($table->execute()) {
                //echo "bien";
                header('Location: ../../template/clienetlte/pages/categorias.php');
            }else{
                //header('Location: template/clienetlte/pages/categorias.php');
            echo"esta mal" ;
                       }
        }

        public function veridcategoria($id){
            $rows = null;
            $table = $this->db->prepare("SELECT id_categoria, nombre_categoria FROM categoria WHERE id_categoria = :id");
            $table->bindParam(':id', $id);
            $table->execute();
            while ($result = $table->fetch()) {
                $rows[] = $result;
            }
            return $rows;
        }
        

        

        public function editarcategorias($id, $nombres)
        {

            $table = $this->db->prepare("UPDATE categoria SET nombre_categoria = :nombre_categoria WHERE id_categoria = :id");
            $table->bindParam(':id', $id);
            $table->bindParam(':nombre_categoria', $nombres);
            if ($table->execute()) {
            
                header('Location: ../../template/clienetlte/pages/categorias.php');
            } else {
                header('Location: ../vista/edit.php');
            }
        }


        
        public function eliminarCategoria($id)
        {
            $table = $this->db->prepare("DELETE FROM categoria WHERE id_categoria = :id");
            $table->bindParam(':id', $id);
            if ($table->execute()) {

                header('Location: ../../template/clienetlte/pages/categorias.php');
            } else {
                header('Location: ../vista/delete.php');
            }
    }

        
    
}



?>


