<?php

require_once("conexiones/conexion.php");

session_start();

class Domicilio extends Conexion {


    public function __construct()
        {
            $this->db = parent::__construct();
        }

        public function verdomicilio()
        {
            $file_path = null;
            $table = $this->db->prepare("SELECT id_domicilio,nombres,apellidos,telefono,cc,direccion FROM domicilio  ");
            $table->execute();
            while ($result = $table->fetch()) {
                $file_path[] = $result;
            }
            return $file_path;
        }
}

?>