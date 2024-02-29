<?php
include_once("ShowErrors.php");

final class Connection
{
    private $server = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "ml_productos";

    // Método GET Connection para crear la conexión.-
    public function getConnection(){
        return $conexion = new mysqli(
            $this->server,
            $this->user,
            $this->password,
            $this->db
        );
    }

    // Método CLOSE connection para cerrar la conexión.- 
    public function closeConnection($conexion){
        $conexion->close();
    }
}

    // comprobamos si hay errores.- 
    $con = new Connection();
    
    if ($con->getConnection()->connect_error) {
        die($con->getConnection()->connect_error);
    }
    //else{
        //echo "Conectada!";
    //}


?>