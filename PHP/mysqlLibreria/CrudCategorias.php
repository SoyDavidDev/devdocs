<?php
require_once("Connection.php");

class Categorias{
    public function showCategorias(){
        // creamos nueva conexión
        $sqlConnection = new Connection();
        $mySql = $sqlConnection->getConnection();
        // CONSULTA
        $sql = "SELECT * FROM categorias";
        // ejecutar consulta
        $resultado = $mySql->query($sql);
        // cerramos conexión
        $sqlConnection->closeConnection($mySql);

        return $resultado->fetch_all(MYSQLI_BOTH);
        /*print_r($resultado->fetch_all(MYSQLI_BOTH));*/   
    }



}
/* $categorias = new Categorias();
$categorias->showCategorias(); */
?>