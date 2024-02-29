<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
    <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
</head>
<body>
<?php   
    include_once("conectarBD.php");

    $busqueda_precio = $_REQUEST['precio'];

    try {
        $sql = 'SELECT * FROM videos';
        // se prepara la instrucción según la consulta sql
        $resultado = $pdo->prepare($sql);
        
        //asignamos marcadores a las variables recogidas de POST
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
    }catch (Exception $ex) {
        echo "Fallo en la comunicación con la base de datos. " . 
        $ex->getLine();
    }finally{
        $pdo=null;
        $resultado = null;
    }    
        
?>
</body>
<script 
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
crossorigin="anonymous">
</script>
</html>