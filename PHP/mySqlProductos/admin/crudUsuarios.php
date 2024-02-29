<?php
require_once("../Connection/Connection.php");
// traemos la conexión.- 

class Usuarios{
    public function showUsuarios(){
        // Creamos nueva conexión.- 
        $sqlConnection = new Connection();
        $mySql = $sqlConnection->getConnection();
        // consulta
        $sql = "SELECT * FROM usuarios";
        // ejecutamos la query y guardamos en variable para mostrar luego
        $resultado = $mySql->query($sql) or die($mySql->error);
        // cerramos la conexión.- 
        $sqlConnection->closeConnection($mySql);

        return $resultado->fetch_all(MYSQLI_BOTH);
        //print_r($resultado->fetch_array(MYSQLI_BOTH));
    }

    public function addUsuario($data){
        // Creamos nueva conexión.- 
        $sqlConnection = new Connection();
        $mySql = $sqlConnection->getConnection();
        // CONSULTA
        $sql = "INSERT INTO usuarios (nombre, usuario, password, rol) VALUES
        ('$data[0]', '$data[1]', '$data[2]', '$data[3]');";

        // Ejecutamos query.-
        $mySql->query($sql) or die($mySql->error);
        //Cerramos la conexión
        $sqlConnection->closeConnection($mySql);
    }

    public function delUsuario($data){
        //Creamos nueva conexión.-
        $sqlConnection = new Connection();
        $mySql = $sqlConnection->getConnection();

        // consulta
        $sql = "DELETE FROM usuarios WHERE id = '$data';";

        // ejecutamos la query.- 
        $mySql->query($sql) or die($mySql->error);
        // cerramos la conexión.- 
        $sqlConnection->closeConnection($mySql);
    }

    public function updUsuario($data){
        //Creamos conexión.- 
        $sqlConnection = new Connection();
        $mySql = $sqlConnection->getConnection();
        // Consulta
        $sql = "UPDATE usuarios
        SET nombre='$data[1]', usuario = '$data[2]', password = '$data[3]', rol = '$data[4]'
        WHERE id = '$data[0]';";
        // ejecutamos la query.-
        $mySql->query($sql) or die($mySql->error);
        //cerramos la conexión.- 
        $sqlConnection->closeConnection($mySql);
    }
    public function UsuarioById($id){
        // creamos nueva conexión.- 
        $sqlConnection = new Connection();
        $mySql = $sqlConnection->getConnection();
        //consulta
        $sql= "SELECT * FROM usuarios WHERE id = $id";
        //Ejecutamos la query en una variable para mostrarla en return.
        $resultado = $mySql->query($sql) or die($mySql->error);
        //Cerramos conexión.-
        $sqlConnection->closeConnection($mySql);

        return $resultado->fetch_all(MYSQLI_BOTH);
    }

    public function checkLogin($data){
        $sqlConnection = new Connection();
        $mySql = $sqlConnection->getConnection();

        $sql = "SELECT * FROM usuarios 
        WHERE usuario = '$data[0]' AND password = '$data[1]';";
        $resultado = $mySql->query($sql) or die($mySql->error);   
        $sqlConnection->closeConnection($mySql);

        if ($resultado->num_rows ==1) {
            return $resultado->fetch_all(MYSQLI_BOTH);
        }else {
            return false;
        }
    }

}

//$usuarios = new Usuarios();
// $usuarios->showUsuarios();
//$database = array('mramos', '1');
//$usuarios->checkLogin($database);
?>