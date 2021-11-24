
<?php

require_once("conexion/conexion.php");



class Productos extends Conexion {


    public function __construct()
        {
            $this->db = parent::__construct();
        }

        public function verproducto()
        {
            $rows = null;
            $table = $this->db->prepare("SELECT id_productos,nombre_producto,codigo,descripcion,precio,estado,nombre_categoria FROM productos INNER JOIN categoria ON productos.id_productos=categoria.id_categoria; ");
            $table->execute();
            while ($result = $table->fetch()) {
                $rows[] = $result;
            }
            return $rows;
        }
        

        public function agregarProductos($nombre_producto,$codigo,$descripcion,$precio,$estado,$categoria){
            $table = $this->db->prepare("INSERT INTO productos (nombre_producto,codigo,descripcion,precio,estado,id_categoria) VALUES (:nombre_producto,:codigo,:descripcion,:precio,:estado,:id_categoria);"); 
            $table->bindParam(':nombre_producto', $nombre_producto) ;
            $table->bindParam(':codigo', $codigo);
            $table->bindParam(':descripcion', $descripcion);
            $table->bindParam(':precio', $precio);
            $table->bindParam(':estado', $estado);
            $table->bindParam(':id_categoria', $categoria);
            
            
            if ($table->execute()) {
                //echo "bien";
                header('Location: ../../template/clienetlte/pages/productos.php');
            }else{
                //header('Location: template/clienetlte/pages/categorias.php');
            echo"esta mal" ;
                       }
        }

        public function vercategorias()
        {
            $file_path = null;
            $table = $this->db->prepare("SELECT id_categoria, nombre_categoria FROM categoria ");
            $table->execute();
            while ($result = $table->fetch()) {
                $file_path[] = $result;
            }
            return $file_path;
        }

        
        public function verinfoproducto($id){
            $rows = null;
            $table = $this->db->prepare("SELECT id_productos,nombre_producto,codigo,descripcion,precio,estado,id_categoria FROM productos WHERE id_productos = :id");
            $table->bindParam(':id', $id);
            $table->execute();
            while ($result = $table->fetch()) {
                $rows[] = $result;
            }
            return $rows;
        }
        public function veridproducto($id){
            $rows = null;
            $table = $this->db->prepare("SELECT id_productos,nombre_producto,codigo,descripcion,precio,estado,id_categoria FROM productos WHERE id_productos = :id");
            $table->bindParam(':id', $id);
            $table->execute();
            while ($result = $table->fetch()) {
                $rows[] = $result;
            }
            return $rows;
        }



}



?>


