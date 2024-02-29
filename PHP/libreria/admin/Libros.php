<?php

require("database/CrudLibros.php");

$dataBase = new Libros();
$libros = $dataBase->showLibros();

if (isset($_POST["new_libro"])) {
    $titulo = $_POST['titulo'];
    $id_categoria = $_POST['$id_categoria'];
    $precio = $_POST['precio'];
    $id_autor = $_POST['id_autor'];

    $imagen = $_FILES['imagen']['name']; // nombre img

    $data = array($titulo,$id_categoria,$precio,$id_autor,$imagen);
    $dataBase = new Libros();

    if ($resultado=$dataBase->addLibro($data)) {
        if (move_uploaded_file($_FILES['imagen']['tmp_name'],'img/'.$imagen)) {
            header("Location:Libros.php");
        }
    }else {
        $msg = "No se ha podido insertar el libro.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIBROS</title>
</head>
<body>
    <h1>Backend - Gestión de la librería</h1>
    <?php include ("menu.php"); ?>

    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post"
    enctype="multipart/form-data">
    <input type="hidden" name="id_libro" 
    value="<?php echo (isset($_GET['editar'])) ? $id_libro : '' ?>">
    
    <label for="titulo">TÍTULO</label>
    <input type="text" name="titulo" id="titulo"
    value="<?php echo (isset($_GET['editar'])) ? $titulo : '' ?>">
    <br>
    <label for="categoria">CATEGORÍA</label>
    <input type="text" name="categoria">
    <br>
    <label for="categoria">PRECIO</label>
    <input type="number" name="categoria">
    <br>
    <label for="categoria">AUTOR</label>
    <input type="text" name="categoria">
    <br>
    <label for="categoria">IMAGEN</label>
    <input type="file" name="imagen">

    <br>
    <br>
    <input type="submit"
    name="<?php echo (isset($_GET['editar'])) ? 'upd_libro' : 
    'new_libro'?>">
    <br>
    </form>

    <br>
    <table border="1">
        <tr>
            <td>TÍTULO</td>
            <td>CATEGORÍA</td>
            <td>PRECIO</td>
            <td>AUTOR</td>
            <td>IMAGEN</td>
            <td>EDITAR</td>
            <td>ELIMINAR</td>
        </tr>
        <?php 
        foreach ($libros as $libro) {?>
        <tr>
            <td><?php echo $libro["titulo"];?></td>
            <td><?php echo $libro["categoria"];?></td>
            <td><?php echo $libro["precio"];?></td>
            <td><?php echo $libro["autor"];?></td>
            <td>
                <img src="img/<?php echo $libro['imagen'];?>" width="50">
            </td>
            <td><a href="Libros.php?id_libro=<?php echo $libro[0];?>&editar">Editar</a></td>
            <td><a href="Libros.php?id_libro=<?php echo $libro[0];?>&eliminar">Eliminar</a></td>        </tr>
        <?php
        } // END FOREACH
        ?>
    </table>
</body>
</html>