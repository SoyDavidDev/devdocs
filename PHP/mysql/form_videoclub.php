<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Vídeo</title>
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
        h3{
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
                <h1 class="custom-title">Insertar</h1>
            </div>
</div>

<div class="col-md-6 mx-auto">
    <table border="1" class="table table-light table-hover">
    <form action="insertar_video.php" method="post">
        <tr>
            <td>
                <h3>Título</h3>
            </td>
            <td>
            <div class="input-group mb-3">
            <input type="text" name="titulo" class="form-control">
            </div>            
            </td>
        </tr>
        <tr>
            <td>
                <h3>Género:</h3>
            </td>
            <td>
                <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">
                    Opciones</label>
                <select name="genero" class="form-select" 
                id="inputGroupSelect01">
                    <option value="sel">Selecciona Género</option>
                    <option value="Accion">Acción</option>
                    <option value="Scifi">Ciencia Ficción</option>
                    <option value="Comedia">Comedia</option>
                    <option value="Drama">Drama</option>
                    <option value="Romance">Romance</option>
                    <option value="Suspense">Suspense</option>
                    <option value="Terror">Terror</option>
                </select>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <h3>Año:</h3>
            </td>
            <td>
            <div class="input-group mb-3">
            <input type="number" name="anyo" id="anyo" class="form-control">
            </div>   
            </td>
        </tr>
        <tr>
            <td>
                <h3>Precio:</h3>
            </td>
            <td>
            <div class="input-group mb-3">
            <input type="number" class="form-control" 
            aria-label="Amount (to the nearest dollar)" name="precio">
            <span class="input-group-text">€</span>
            </div>
            </td>
        </tr>
        <tr>
            <td>
                <input name="submit" type="submit" value="Guardar"
                class="btn btn-info">
            </td>
            <td></td>
        </tr>
    </form>
    </table>
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