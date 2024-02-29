<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Vídeo</title>
    <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
    <style>
        .custom-title {
            font-size: 36px;
            font-weight: bold;
            color: #007bff; 
        }
        td h3{
            font-weight: bold;
            color: #007bff; 
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">Mi VideoClub</a>
        </div>
        <div>
        <div class="container">
        <i class="fa-solid fa-film fa-beat fa-2xl"></i>
        </div>
        </div>
</nav>
<main>

<div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <h1 class="custom-title">Buscar</h1>
            </div>
</div>

<div class="col-md-6 mx-auto">

<table border="1" class="table table-light table-hover">
    <form action="search.php" method="post">
        <tr>
            <td>
                <h3>Precio:</h3>
            </td>
            <td>
            <div class="input-group mb-3">
            <input type="text" class="form-control" 
            aria-label="Amount (to the nearest dollar)" name="precio">
            <span class="input-group-text">€</span>
            </div>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input name="search" type="submit" value="Buscar" size="30"
                class="btn btn-info">
            </td>
        </tr>
        <tr>
            <td colspan="2">
            <a href="search.php" class="btn btn-info">Resetear búsqueda</a>
            </td>
        </tr>
    </form>
    </table>
</div>

<div class="col-md-6 mx-auto">
<?php
    include_once("conectarBD.php");

    $busqueda_precio = $_REQUEST['precio'];

    if (!isset($_POST['search'])) {
        include_once("listar.php");
    }else{
        try {
            $sql = 'SELECT * FROM videos WHERE PRECIO < ? ORDER BY GENERO';
            $resultado = $pdo->prepare($sql);
        
            $resultado->bindParam(1,$busqueda_precio);
            $resultado->execute();
        
            echo '<table border="1" class="table table-light table-hover">';
            echo '<tr>
            <th>ID</th><th>Título</th><th>Género</th><th>Año</th><th>Precio</th>
            </tr>';
            while ($registro = $resultado->fetch()) {
                echo '<tr>';
                echo '<td>' . $registro['ID'] . '</td>';
                echo '<td>' . $registro['TITULO'] . '</td>';
                echo '<td>' . $registro['GENERO'] . '</td>';
                echo '<td>' . $registro['AÑO'] . '</td>';
                echo '<td>' . $registro['PRECIO'] . '</td>';
                echo '</tr>';
            }
                echo '</table>';            
            } catch (Exception $exception) {
                echo "Error en búsqueda" . $exception->getLine();
            } finally{
                $pdo=null;
                $resultado = null;
            }
    }
?>
</div>

<div class="col-md-2 mx-auto text-center">
<a href="index.php" class="btn btn-primary btn-block mb-4">Página Principal</a>
</div>

</main>

</body>
<script 
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
crossorigin="anonymous">
</script>
<script src="https://kit.fontawesome.com/be2d98cd71.js" 
crossorigin="anonymous">
</script>
</html>