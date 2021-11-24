<?php

require_once('conexiones/conexion.php');

session_start();

class DetalleOrden extends Conexion {


    public function __construct()
        {
            $this->db = parent::__construct();
        }

        public function verDetalleOrden()
        {
            $file_path = null;
            $table = $this->db->prepare("SELECT id_detalleorden,cantidad,preciototal,id_orden,id_productos FROM detalleorden");
            $table->execute();
            while ($result = $table->fetch()) {
                $file_path[] = $result;
            }
            return $file_path;
        }
}



?>


