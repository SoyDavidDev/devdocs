<?php 

require ("crudAutores.php");

$dataBase = new Autores();
$autores = $dataBase->showAutores();

if (isset($_POST['nuevo_autor'])) {
    $autor = $_POST['autor'];

    $data = array($autor);
    $dataBase = new Autores();
    $dataBase->addAutor($data);
    header(("Location:Autores.php"));
}
if (isset($_GET['eliminar'])) {
    $id = $_GET['id'];

    $data = array($id);
    $database = new Autores();
    $database->delAutor($data);
    header("Location:Autores.php");
}
if (isset($_GET['editar'])) {
    $id = $_GET['id'];
    $database = new Autores();
    $autores_upd = $database->AutorById($id);
    foreach ($autores_upd as $autor_upd) {
        $autor = $autor_upd[1];
    }
}

if (isset($_POST['upd_autor'])) {
    $id = $_POST['id'];
    $autor = $_POST['autor'];

    $data = array($id, $autor);
    $database = new Autores();
    $database->updAutor($data);
    header("Location:Autores.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUTORES</title>
</head>
<body>
<h1>Backend - Gestión de la Librería</h1>
    <?php include ("menu.php"); ?>
    
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <input type="hidden" name="id" id="id"
        value="<?php echo (isset($_GET['id']))? $id : '';?>">
        <br>
        <label>AUTOR</label>
        <input type="text" name="autor"
        value="<?php echo (isset($_GET['editar']) ? $autor : '');?>">
        <br>
        <input type="submit" 
        name="<?php echo (isset($_GET['editar'])) ? 'upd_autor' : 'nuevo_autor';?>">
        <br>
    </form>
<br><br>
    <table border="1">
        <tr>
            <td>ID_AUTOR</td>
            <td>AUTOR</td>            
            <td>EDITAR</td>
            <td>ELIMINAR</td>
        </tr>
        <?php
        foreach ($autores as $autor) {?>
        <tr>
            <td><?php echo $autor["id"];?></td>
            <td><?php echo $autor["autor"];?></td>
            <td><a href="Autores.php?id=<?php echo $autor[0];?>&editar">Editar</td>
            <td><a href="Autores.php?id=<?php echo $autor[0];?>&eliminar">Eliminar</td>
        </tr>
    <?php
    }//END FOREACH
    ?>
    </table>
</body>
</html>
<?php  



?>
