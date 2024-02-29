<?php
require_once("Connection.php");
// TRAEMOS LA CONEXIÓN.- 

class Usuarios{
    public function showUsuarios(){
        // CREAMOS NUEVA CONEXIÓN
        $sqlConnection = new Connection();
        $mySql = $sqlConnection->getConnection();
        // CONSULTA
        $sql = "SELECT * FROM usuarios";
        // EJECUTAMOS LA QUERY
        $resultado = $mySql->query($sql);
        // CERRAMOS LA CONEXIÓN
        $sqlConnection->closeConnection($mySql);

        // Probamos si imprime en print algún dato
        // Si funciona devolvemos a return.- 
        // en return no devuelve nada por pantalla.-
        return $resultado->fetch_all(MYSQLI_BOTH);
        //print_r($resultado->fetch_array(MYSQLI_BOTH));
    }
    public function UsuarioById($id){
        $sqlConnection = new Connection();
        $mySql = $sqlConnection->getConnection();

        $sql = "SELECT * FROM usuarios WHERE id= $id";

        $resultado = $mySql->query($sql);

        $sqlConnection->closeConnection($mySql);

        return $resultado->fetch_all(MYSQLI_BOTH);
    }
    // para consultas SELECT, devuelven array con resultado consulta, return.
    // los demás necesitan param de entrada y no devuelven datos.-
    public function addUsuario($data){
        // CREAMOS NUEVA CONEXIÓN
        $sqlConnection = new Connection();
        $mySql = $sqlConnection->getConnection();
        // CONSULTA
        $sql = "INSERT INTO usuarios (usuario, password, rol) 
        values ('$data[0]','$data[1]','$data[2]')"; // string siempre comillas
        // Es buena conducta hacerlo entre comillas siempre así no te equivocas

        // EJECUTAMOS LA QUERY
        $mySql->query($sql);
        // CERRAMOS LA CONEXIÓN
        $sqlConnection->closeConnection($mySql);
    }

    public function updUsuario($data){
        // CREAMOS NUEVA CONEXIÓN
        $sqlConnection = new Connection();
        $mySql = $sqlConnection->getConnection();
        // CONSULTA
        $sql= "UPDATE usuarios
        SET usuario='$data[1]', password='$data[2]', rol= '$data[3]'
        WHERE id = '$data[0]'";
        
        // EJECUTAMOS LA QUERY
        $mySql->query($sql);
        // CERRAMOS LA CONEXIÓN
        $sqlConnection->closeConnection($mySql);
    }

    public function delUsuario($data){
        // CREAMOS NUEVA CONEXIÓN
        $sqlConnection = new Connection();
        $mySql = $sqlConnection->getConnection();
        // CONSULTA
        $sql = "DELETE FROM usuarios WHERE id = '$data[0]'";
        // EJECUTAMOS LA QUERY
        $mySql->query($sql);
        // CERRAMOS LA CONEXIÓN
        $sqlConnection->closeConnection($mySql);
    }


}

//$usuarios = new Usuarios();
//$usuarios ->showUsuarios();
?>