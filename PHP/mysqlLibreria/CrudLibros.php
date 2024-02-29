<?php
require_once("Connection.php");

class Libros{
    public function showLibros(){
        $sqlConnection = new Connection();
        $mySql = $sqlConnection->getConnection();

        $sql = "SELECT libros.*, c.categoria
        FROM libros JOIN categorias c
        ON libros.id_categoria = c.id_categoria";

        $resultado = $mySql->query($sql);

        $sqlConnection->closeConnection($mySql);

        return $resultado->fetch_all(MYSQLI_BOTH);
        // print_r($resultado->fetch_all(MYSQLI_BOTH));
    }
    
    public function addLibro($data){
        $sqlConnection = new Connection();
        $mySql = $sqlConnection->getConnection();

        $sql = "INSERT INTO libros (titulo, autor, id_categoria, precio) 
        VALUES ('$data[0]', '$data[1]', '$data[2]', '$data[3]')";

        $mySql ->query($sql);
        $sqlConnection->closeConnection($mySql);
    }

    public function delLibro($data){
        $sqlConnection = new Connection();
        $mySql = $sqlConnection->getConnection();

        $sql = "DELETE FROM libros WHERE id_libro = $data[0];";

        $mySql->query($sql);

        $sqlConnection->closeConnection($mySql);
    }

    public function updLibro($data){
        $sqlConnection = new Connection();
        $mySql = $sqlConnection->getConnection();

        $sql = "UPDATE libros
        SET titulo = '$data[1]', autor = '$data[2]', id_categoria = '$data[3]', 
        precio = '$data[4]'
        WHERE id_libro = '$data[0]';";

        $mySql->query($sql);
        $sqlConnection->closeConnection($mySql);
    }

    public function LibroById($id){
        $sqlConnection = new Connection();
        $mySql = $sqlConnection->getConnection();

        $sql = "SELECT * FROM libros WHERE id_libro = $id";

        $resultado = $mySql->query($sql);

        $sqlConnection->closeConnection($mySql);

        return $resultado->fetch_all(MYSQLI_BOTH);
    }

}

//$libros = new Libros ();
//$libros->showLibros();

?>