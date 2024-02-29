<?php
require_once("Connection.php");

class Libros{
    public function showLibros(){
        $sqlConnection = new Connection();
        $mySql = $sqlConnection->getConnection();

        $sql = "SELECT l.*, c.categoria, a.autor
        FROM libros l
            LEFT JOIN categorias c ON l.id_categoria = c.id_categoria
            LEFT JOIN autores a ON l.id_autor = a.id";
        $result = $mySql->query($sql) or die($mySql->error);
        $sqlConnection->closeConnection($mySql);

        return $result->fetch_all(MYSQLI_BOTH);
    }

    public function addLibro($data){
        $sqlConnection = new Connection();
        $mySql = $sqlConnection->getConnection();
        $stmt = $mySql->prepare("INSERT INTO libros (titulo,id_categoria,precio,id_autor,imagen)
        VALUES (?,?,?,?,?)");
        $stmt->bind_param("sidis",$data[0],$data[1],$data[2],$data[3],$data[4]);

        try {
            $stmt->execute();
        } catch (Exception $ex) {
            die("No se ha podido insertar el libro.");
        }
        $stmt->close();
        $sqlConnection->closeConnection($mySql);
        return true;
    }
}
?>