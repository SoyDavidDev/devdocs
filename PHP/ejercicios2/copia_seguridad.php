<?php

/**Crea una página llamada copia_seguridad.php. En la misma carpeta, crea un archivo llamado datos.txt 
 * con tus datos personales en varias líneas (Nombre, Dirección, Teléfono y E-mail, tuyos o inventados). 
 * 
 * Haz que la página php lea el archivo y lo guarde en otro llamado copia_datos.txt, en la misma carpeta. */

$fichero = "datos.txt";
$nuevo_fichero = "copia_datos.txt";

$contenido = file($fichero);

$cadena = file_get_contents($fichero);

file_put_contents($nuevo_fichero, $cadena);

print_r($contenido);