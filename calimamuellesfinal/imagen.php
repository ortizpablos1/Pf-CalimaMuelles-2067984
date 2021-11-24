<?php

require_once("conexiones/conexion.php");

session_start();

class Imagenes extends Conexion {


    public function __construct()
        {
            $this->db = parent::__construct();
        }

        public function verinfoimagen()
        {
            $file_path = null;
            $table = $this->db->prepare("SELECT id_imagenesp, nombreimagen,id_productos,imagen FROM imagenesproductos  ");
            $table->execute();
            while ($result = $table->fetch()) {
                $file_path[] = $result;
            }
            return $file_path;
        }

        public function verproductos()
        {
            $file_path = null;
            $table = $this->db->prepare("SELECT id_productos, nombre_producto FROM productos ");
            $table->execute();
            while ($result = $table->fetch()) {
                $file_path[] = $result;
            }
            return $file_path;
        }
}


?>