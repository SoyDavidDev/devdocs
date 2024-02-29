<?php 

require ("CrudLibros.php");
require ("CrudCategorias.php");
require ("crudAutores.php");


$dataBase = new Libros();
$libros = $dataBase->showLibros();

$dataBase = new Categorias();
$categorias = $dataBase->showCategorias();

$dataBase = new Autores();
$autores = $dataBase->showAutores();

if (isset($_POST["nuevo_libro"])){
    $titulo = $_POST["titulo"];
    $id_categoria = $_POST["id_categoria"];
    $precio = $_POST["precio"];
    $autor = $_POST['autor'];

	$data = array($titulo,$id_categoria,$precio,$autor);
	$dataBase = new Libros();
	$dataBase->addLibro($data);
	header("location:Libros.php");
	
}

if (isset($_GET["eliminar"])){
    $id_libro = $_GET["id_libro"];
   
	$data = array($id_libro); 		
	$dataBase = new Libros();
    
	$dataBase->deleteLibro($data); 
	header("location:Libros.php");
}

if (isset($_GET["editar"])){
    $id_libro= $_GET["id_libro"];
   
	$data = array($id_libro); 
					
	$dataBase = new Libros();
	$libros_editar = $dataBase->LibroById($data);

    foreach ($libros_editar as $libro_editar){
        $titulo = $libro_editar["titulo"];
        $id_categoria = $libro_editar["id_categoria"];
        $categoria  = $libro_editar["categoria"];
        $precio = $libro_editar["precio"];
        $autor = $libro_editar['autor'];
    }
}

if (isset($_POST["editar_libro"])){
    $id_libro = $_POST["id_libro"];
    $titulo = $_POST["titulo"];
    $id_categoria= $_POST["id_categoria"];
    $precio = $_POST["precio"];
    $autor = $_POST['autor'];
   
	$data = array( $id_libro,$titulo,$id_categoria,$precio,$autor); 
					
	$dataBase = new Libros();
    $dataBase->editLibro($data);

    header("location:Libros.php");
 
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
<h1>Backend - Gestión de la Librería</h1>
    <?php include ("menu.php"); ?>

    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    <input type="hidden" name="id_libro" value="<?php echo (isset($_GET['editar'])) ? $id_libro : '';?>">
       <label>TITULO</label>
        <input type="text" name="titulo" value="<?php echo (isset($_GET['editar'])) ? $titulo : '';?>">
        <br>
        <label>CATEGORIA</label>
        <select name="id_categoria">
            <?php
            foreach($categorias as $categoria){
                ?>
                <option value="<?php echo $categoria[0] ;?>" <?php echo (isset($_GET['editar']) && $categoria[0]==$id_categoria)?'selected':'';?>><?php echo $categoria[1] ;?></option>
                <?php
            }
            ?>
        </select>
        <br>
        <label>PRECIO</label>
        <input type="text" name="precio" value="<?php echo (isset($_GET['editar'])) ? $precio : '';?>">
        <br>
        <label for="marca">AUTOR</label>
        <select name="autor" id="autor">
            <?php
            foreach ($autores as $autor) {
            ?>
            <option value="<?php echo $autor[0];?>">
            <?php echo $autor[1];?></option>
            <?php
            }
            ?>
        </select>
        <br>
        <br>
        <input type="submit" name="<?php echo (isset($_GET['editar'])) ? 'editar_libro' : 'nuevo_libro';?>">
        <br>
    </form>
<br><br>
    <table border="1">
        <tr>
            <td>TITULO</td>
            <td>CATEGORIA</td>
            <td>PRECIO</td>
            <td>AUTOR</td>
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
            <td><a href="Libros.php?id_libro=<?php echo $libro[0];?>&editar">Editar</td>
            <td><a href="Libros.php?id_libro=<?php echo $libro[0];?>&eliminar">Eliminar</td>
        </tr>
    <?php
    }//END FOREACH
    ?>
    </table>
</body>
</html>