<?php
require_once("../Connection/Connection.php");

class Productos{
    public function showProductos(){
        //Se crea conexión
        $sqlConnection = new Connection();
        $mySql = $sqlConnection->getConnection();
        //CONSULTA
        $sql = "SELECT p.*, m.marca, a.almacen
        FROM productos p
            LEFT JOIN marcas m ON p.id_marca = m.id
            LEFT JOIN almacenes a ON p.id_almacen = a.id;";
        $resultado = $mySql->query($sql);
        $sqlConnection->closeConnection($mySql);

        //print_r($resultado->fetch_all(MYSQLI_BOTH));
        return $resultado->fetch_all(MYSQLI_BOTH);
    }

    public function addProducto($data){
        //Se crea conexión.-
        $sqlConnection = new Connection();
        $mySql = $sqlConnection->getConnection();
        // Consulta 
        $sql = "INSERT INTO productos (producto, precio, id_marca, id_almacen) 
        VALUES ('$data[0]', '$data[1]', '$data[2]', '$data[3]');";
        // ejecutamos y cerramos conexión.-
        $mySql->query($sql);
        $sqlConnection->closeConnection($mySql);
    }

    public function delProducto($data){
        // Se crea conexión
        $sqlConnection = new Connection();
        $mySql = $sqlConnection->getConnection();
        // Consulta
        $sql = "DELETE FROM productos WHERE id = $data[0];";
        //Ejecutas consulta y cerramos consulta.
        $mySql->query($sql);
        $sqlConnection->closeConnection($mySql);
    }

    public function updProducto($data){
        //Se crea conexión.-
        $sqlConnection = new Connection();
        $mySql = $sqlConnection->getConnection();
        // consulta
        $sql = "UPDATE productos
        SET producto='$data[1]', precio = $data[2], id_marca = $data[3],
        id_almacen = '$data[4]'
        WHERE id= $data[0];";
        //Ejecutamos y cerramos consulta.-
        $mySql->query($sql);
        $sqlConnection->closeConnection($mySql);
    }

    public function ProductobyId($id){
        //Creamos conexión.- 
        $sqlConnection = new Connection();
        $mySql = $sqlConnection->getConnection();
        // Consulta
        $sql = "SELECT * FROM productos WHERE id=$id;";
        //Se hace igual que show general.- variable para mostrar en return
        $resultado = $mySql->query($sql);
        $sqlConnection->closeConnection($mySql);

        return $resultado->fetch_all(MYSQLI_BOTH);
    }
}

//$productos = new Productos();
//$productos->showProductos();
?>