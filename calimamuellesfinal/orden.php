
<?php

require_once('conexiones/conexion.php');

session_start();

class Orden extends Conexion {


    public function __construct()
        {
            $this->db = parent::__construct();
        }

        public function verOrden()
        {
            $file_path = null;
            $table = $this->db->prepare("SELECT id_orden,id_domicilio, id_usuario, id_metodopago FROM orden ");
            $table->execute();
            while ($result = $table->fetch()) {
                $file_path[] = $result;
            }
            return $file_path;
        }
}



?>


