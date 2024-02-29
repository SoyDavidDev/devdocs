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
                <h1 class="custom-title">Bienvenido</h1>
            </div>
</div>

<div class="col-md-6 mx-auto">
<table border="1" class="table table-light table-hover">
    <form action="delete.php" method="post">
        <tr>
            <td>
                <h3>ID:</h3>
            </td>
            <td>
                <input type="text" name="id" id="id">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input name="delete" type="submit" value="Borrar" size="30"
                class="btn btn-info">
            </td>
        </tr>
    </form>
    </table>
</div>

<div class="col-md-6 mx-auto">
<?php   
    include_once("conectarBD.php");

    $busqueda_id = $_REQUEST['id'];
        
    if (!isset($_POST['delete'])) {
        include_once("listar.php");
    }else{
        $sql = 'DELETE FROM VIDEOS WHERE ID = ?';
        
        try {
            // se prepara la instrucción según la consulta sql
            $resultado = $pdo->prepare($sql);
    
            //asignamos marcadores a las variables recogidas de POST
            $resultado->bindParam(1,$busqueda_id);
            $resultado->execute();

            header("Refresh:2; url=index.php");     
            echo "<h1>Datos eliminados!</h1>";
            die();
        
        } catch (Exception $ex) {
            header("Refresh:3; url=error.php");
            echo "Fallo en la eliminación de datos. " . $ex->getLine();
            die();

        }finally{
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
