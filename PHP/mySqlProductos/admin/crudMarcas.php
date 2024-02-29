<?php
require_once("../Connection/Connection.php");

class Marcas{
    public function showMarcas(){
        //Creamos nueva conexión
        $sqlConnection = new Connection();
        $mySql = $sqlConnection->getConnection();
        // consulta
        $sql = "SELECT * FROM marcas;";
        // ejecutar consulta
        $resultado = $mySql->query($sql);
        //cerramos conexión
        $sqlConnection->closeConnection($mySql);

        return $resultado->fetch_all(MYSQLI_BOTH);
        //print_r($resultado->fetch_all(MYSQLI_BOTH));
    }

    public function addMarca($data){
        $sqlConnection = new Connection();
        $mySql = $sqlConnection->getConnection();

        $sql ="INSERT INTO marcas (marca) VALUES ('$data');";

        $mySql->query($sql) or die($mySql->error);

        $sqlConnection->closeConnection($mySql);
    }

    public function delMarca($data){
        $sqlConnection = new Connection();
        $mySql = $sqlConnection->getConnection();

        $sql = "DELETE FROM marcas WHERE id = '$data[0]'";

        $mySql->query($sql) or die($mySql->error);
        $sqlConnection->closeConnection($mySql);
    }

    public function updMarca($data){
        $sqlConnection = new Connection();
        $mySql = $sqlConnection->getConnection();
        
        $sql = "UPDATE marcas SET marca='$data[1]' WHERE id='$data[0]';";

        $mySql->query($sql) or die($mySql->error);

        $sqlConnection->closeConnection($mySql);
    }

    public function MarcaById($id){
        $sqlConnection = new Connection();
        $mySql = $sqlConnection->getConnection();

        $sql = "SELECT * FROM marcas WHERE id= $id";

        $resultado = $mySql->query($sql) or die($mySql->error);
        $sqlConnection->closeConnection($mySql);

        return $resultado->fetch_all(MYSQLI_BOTH);

    }
}

//$marcas = new Marcas();
//$marcas->showMarcas();

?>