<?php
require_once("Connection.php");

class Autores{
    public function showAutores(){
        $sqlConnection = new Connection();
        $mySql = $sqlConnection->getConnection();

        $sql = "SELECT * FROM autores;";

        $resultado = $mySql->query($sql) or die ($mySql->error);
        $sqlConnection->closeConnection($mySql);

        return $resultado->fetch_all(MYSQLI_BOTH);
    }

    public function addAutor($data){
        $sqlConnection = new Connection();
        $mySQL = $sqlConnection->getConnection();
        $sql = "INSERT INTO autores (autor) VALUES ('$data[0]')";
        $mySQL->query($sql) or die($mySQL->error);

        $sqlConnection->closeConnection($mySQL);
    }

    public function delAutor($data){
        $sqlConnection = new Connection();
        $mySql = $sqlConnection->getConnection();

        // añadido tras corrección examen.- 
        $sql = "DELETE FROM autores WHERE id = $data[0]";
        try {
            $mySql->query($sql);
        } catch (Exception $e) {
            die("No se puede eliminar porque tiene libros asignados.");
        }
        $sqlConnection->closeConnection($mySql);
    }

    public function updAutor($data){
        $sqlConnection = new Connection();
        $mySql = $sqlConnection->getConnection();
        
        $sql = "UPDATE autores SET autor='$data[1]' WHERE id='$data[0]';";

        $mySql->query($sql) or die($mySql->error);

        $sqlConnection->closeConnection($mySql);
    }

    public function AutorById($id){
        $sqlConnection = new Connection();
        $mySql = $sqlConnection->getConnection();

        $sql = "SELECT * FROM autores WHERE id= $id";

        $resultado = $mySql->query($sql) or die($mySql->error);
        $sqlConnection->closeConnection($mySql);

        return $resultado->fetch_all(MYSQLI_BOTH);

    }
}
?>