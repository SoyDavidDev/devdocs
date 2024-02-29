<?php
require_once("../Connection/Connection.php");

class Almacenes{
    public function showAlmacenes(){
        //Creamos nueva conexión
        $sqlConnection = new Connection();
        $mySql = $sqlConnection->getConnection();
        // consulta
        $sql = "SELECT * FROM almacenes;";
        // ejecutar consulta
        $resultado = $mySql->query($sql);
        //cerramos conexión
        $sqlConnection->closeConnection($mySql);

        return $resultado->fetch_all(MYSQLI_BOTH);
        //print_r($resultado->fetch_all(MYSQLI_BOTH));
    }

    public function addAlmacen($data){
        $sqlConnection = new Connection();
        $mySql = $sqlConnection->getConnection();

        $sql ="INSERT INTO almacenes (almacen) VALUES ('$data');";

        $mySql->query($sql) or die($mySql->error);

        $sqlConnection->closeConnection($mySql);
    }

    public function delAlmacen($data){
        $sqlConnection = new Connection();
        $mySql = $sqlConnection->getConnection();

        $sql = "DELETE FROM almacenes WHERE id = $data[0]";

        $mySql->query($sql) or die($mySql->error);
        $sqlConnection->closeConnection($mySql);
    }

    public function updAlmacen($data){
        $sqlConnection = new Connection();
        $mySql = $sqlConnection->getConnection();
        
        $sql = "UPDATE almacenes SET almacen='$data[1]' WHERE id='$data[0]';";

        $mySql->query($sql) or die($mySql->error);

        $sqlConnection->closeConnection($mySql);
    }

    public function AlmacenById($id){
        $sqlConnection = new Connection();
        $mySql = $sqlConnection->getConnection();

        $sql = "SELECT * FROM almacenes WHERE id= $id";

        $resultado = $mySql->query($sql) or die($mySql->error);
        $sqlConnection->closeConnection($mySql);

        return $resultado->fetch_all(MYSQLI_BOTH);

    }
}



?>