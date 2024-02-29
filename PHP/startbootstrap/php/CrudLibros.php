<?php 

require_once("Connection.php");

class Libros{
    public function showLibros(){
        $sqlConnection = new Connection();
        $mySQL = $sqlConnection->getConnection();
        $sql = "SELECT l.*, c.categoria, a.autor
        FROM libros l
            LEFT JOIN categorias c ON l.id_categoria = c.id_categoria
            LEFT JOIN autores a ON l.id_autor = a.id";
        $result = $mySQL->query($sql) or die ($mySQL->error);
        $sqlConnection->closeConnection($mySQL);

        return $result->fetch_all(MYSQLI_BOTH);
    }

    public function addLibro($data){
        $sqlConnection = new Connection();
        $mySQL = $sqlConnection->getConnection();
        $sql = "INSERT INTO libros (titulo,id_categoria,precio,id_autor) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]')";
        $mySQL->query($sql) or die ($mySQL->error);

        $sqlConnection->closeConnection($mySQL);
    }

    public function LibroById($data){
        $sqlConnection = new Connection();
        $mySQL = $sqlConnection->getConnection();
        //$sql = "SELECT libros.*,categorias.categoria FROM libros JOIN categorias ON libros.id_categoria=categorias.id_categoria WHERE id_libro='$data[0]'";
        $sql = "SELECT l.*, c.categoria, a.autor
        FROM libros l
            LEFT JOIN categorias c ON l.id_categoria =c.id_categoria
            LEFT JOIN autores a ON l.id_autor = a.id
            WHERE id_libro='$data[0]'";
        $result = $mySQL->query($sql) or die($mySQL->error);
    
        $sqlConnection->closeConnection($mySQL);
        return $result->fetch_all(MYSQLI_BOTH);
    }
    public function editLibro($data){
        $sqlConnection = new Connection();
        $mySQL = $sqlConnection->getConnection();
        $sql = "UPDATE libros SET titulo='$data[1]', id_categoria='$data[2]',precio='$data[3]', id_autor='$data[4]' WHERE id_libro='$data[0]'";
        $mySQL->query($sql) or die ($mySQL->error);
        
        $sqlConnection->closeConnection($mySQL);
    }

    public function deleteLibro($data){
        $sqlConnection = new Connection();
        $mySQL = $sqlConnection->getConnection();
        $sql = "DELETE FROM libros WHERE id_libro=$data[0]";
        $mySQL->query($sql) or die ($mySQL->error);
        
        $sqlConnection->closeConnection($mySQL);
    }

}
?>

