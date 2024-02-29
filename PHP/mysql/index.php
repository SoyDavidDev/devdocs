<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal</title>
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
                <h1 class="custom-title">Bienvenido</h1>
            </div>
</div>

<div class="col-md-12 mx-auto text-center">
<a href="form_videoclub.php"
class="btn btn-primary btn-block mb-4">Insertar Datos</a>
<a href="search.php" class="btn btn-primary btn-block mb-4">Buscar Datos</a>
<a href="update.php" class="btn btn-primary btn-block mb-4">Actualizar Datos</a>
<a href="delete.php" class="btn btn-primary btn-block mb-4">Borrar Datos</a>
</div>

<div class="col-md-6 mx-auto">
<?php   
include_once("conectarBD.php");

include_once("listar.php");

?>
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