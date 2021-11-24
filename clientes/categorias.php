<?php

require_once('conexion/conexion.php');

session_start();

class Categoria extends Conexion{

    public function __construct()

    {
        $this->db = parent::__construct();
    }


    public function verCategorias(){
        $rows =null;
        $table = $this ->db ->prepare("SELECT  nombre_categoria FROM categoria");
        $table->execute();
            while ($result = $table->fetch()) {
                $rows[] = $result;
            }
            return $rows;
    }

    public function verPorCategoria(){
        $rows =null;
        $table = $this->db->prepare("SELECT nombre_producto,codigo,descripcion,precio,estado FROM productos WHERE id_categoria=1");

        $table->execute();
        while($result = $table->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

}


?>
