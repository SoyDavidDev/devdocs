<?php
include('cabecera.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Buscador de libros</h1>

    <form action="result_libros.php" method="post">
    <p>Texto en búsqueda: <input type="text" name="texto" /></p>
    Buscar en <br> <input type="radio" name="buscar" value="titulo"/> Título del libro 
    <input type="radio" name="buscar" value="autor"/> Autor 
    <input type="radio" name="buscar" value="editorial"/> Editorial<br/> 

    Tipo de libro<select name="tipo">
    <option>Ninguno</option>
    <option value="narrativa">Narrativa</option>
    <option value="poesia">Poesía</option>
    <option value="bio">Biografía</option>
    </select>

    <p><input type="submit" value="Buscar" /></p>
    </form>

</body>
</html>