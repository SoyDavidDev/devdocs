<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" 
enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="20000">
<input type="file" name="fichero">
</form>


<?php
if (is_uploaded_file($_FILES['fichero']['tmp_name'])) {
    $nombreDirectorio = "ficheros/";
    $idUnico = time();
    $nombreFichero = $idUnico . "-" . $_FILES['fichero']['name'];
    move_uploaded_file($_FILES['fichero']['tmp_name'], $nombreDirectorio . 
                        $nombreFichero);
} else {
    print("No se ha podido subir el fichero\n");
}

if (is_uploaded_file($_FILES['fichero']['tmp_name'])) {
    $nombreFichero = "imgs/";
    move_uploaded_file($_FILES['fichero']['tmp_name'], $nombreDirectorio . 
                        $_FILES['fichero']['name']);
} else {
    print("No se ha podido subir el fichero");
}
?>
</body>
</html>