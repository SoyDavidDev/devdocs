<?php
include_once("ShowErrors.php");

class Connection{
    
    // CREDENCIALES DE LA CONEXIÓN
    private $server = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "libreria";

    // MÉTODO GET CONNECTION para crear la conexión.
    public function getConnection(){
        return $conexion = new mysqli(
            $this->server,
            $this->user,
            $this->password,
            $this->db
        );
    }

    // MÉTODO CLOSE para cerrar la conexión.
    public function closeConnection($conexion){
        $conexion->close();
    }
}
    // comprobamos si hay errores
    $con = new Connection();
    if ($con->getConnection()->connect_error) {
        die($con->getConnection()->connect_error);
    }  
    // Ponemos el else la primera vez para comprobar que funciona.-
    /* else {
        echo "Conectada!";
    } */
?>