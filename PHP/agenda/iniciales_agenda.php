<?php
// si no existe o está la celda de nombre vacía inicializamos array
if (!isset($arrayNombres) || empty($_REQUEST['nombre'])) {
    $arrayNombres = array();
    $arrayTelefonos = array();
} else {
    // si no ya añadimos con coma a la lista de la cadena.-.- 
    $arrayNombres = explode(",", $_REQUEST['nombres']);
    $arrayTelefonos = explode(",", $_REQUEST['telefonos']);
}

// Si se ha enviado un nombre.- 
if (!empty($_REQUEST['nombre'])) {

    // añadimos nombre y teléfono
    $nombreNuevo = $_REQUEST['nombre'];
    $telefonoNuevo = $_REQUEST['telefono'];

    $arrayNombres = explode(",", $_REQUEST['nombres']);
    $arrayTelefonos = explode(",", $_REQUEST['telefonos']);

    $indice = count($arrayNombres);

    // comprobamos si el nombre existe 
    $indiceExistente = array_search($nombreNuevo, $arrayNombres);

    if ($indiceExistente) {
        // si el nombre ya existe y se rellena el teléfono se modifica el tel
        if (!empty($telefonoNuevo)) {
            $arrayTelefonos[$indiceExistente] = $telefonoNuevo;
        } else {
            // si no se proporciona teléfono se elimina la entrada.- 
            unset($arrayNombres[$indiceExistente]);
            unset($arrayTelefonos[$indiceExistente]);
        }
    } elseif (!empty($telefonoNuevo)) {
        // si el nombre no existe y se proporciona un teléfono, se agrega
        $arrayNombres[] = $nombreNuevo;
        $arrayTelefonos[] = $telefonoNuevo;
    }
} 
else {
    echo "Rellena el nombre!";
    echo "<br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
    <table border="1">
        <h1>Contactos Guardados</h1>
        <thead>
        <th><label for="nombres"><h3>Nombre:</h3></label></th>
        <th><label for="telefonos"><h3>Teléfono:</h3></label></th>
        </thead>
        <tr>
            <td>
            <input name="nombres" id="nombres" 
            value="<?php if(isset($arrayNombres))
            echo implode(",", $arrayNombres); ?>" 
            style="text-align:right;"/>
            </td>

            <td>
            <input name="telefonos" id="telefonos" 
            value="<?php if(isset($arrayTelefonos))
            echo implode(",", $arrayTelefonos); ?>" 
            style="text-align:right;"/>
            </td>
        </tr>        

    </table>

        <h1>Agregar Contacto</h1>
        <label for="nombre"><h3>Nombre:</h3></label>
        <input type="text" name="nombre" id="nombre" size="20">
        
        <label for="telefono"><h3>Teléfono:</h3></label>
        <input type="text" name="telefono" id="tel" size="20"><br>
        

        <input type="submit" value="Guardar">
    </form>
</body>
</html>
