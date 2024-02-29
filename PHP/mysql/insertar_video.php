    <?php
    include_once("conectarBD.php");

        $busqueda_titulo = $_REQUEST['titulo'];
        $busqueda_genero = $_REQUEST['genero'];
        $busqueda_anyo = $_REQUEST['anyo'];
        $busqueda_precio = $_REQUEST['precio'];
    
        $sql = 'INSERT INTO videos (TITULO, GENERO, AÑO, PRECIO) 
        VALUES (?,?,?,?)';
        
        try {
            // se prepara la instrucción según la consulta sql
            $resultado = $pdo->prepare($sql);
    
            //asignamos marcadores a las variables recogidas de POST
            $resultado->bindParam(1,$busqueda_titulo);
            $resultado->bindParam(2,$busqueda_genero);
            $resultado->bindParam(3,$busqueda_anyo, PDO::PARAM_INT);
            $resultado->bindParam(4,$busqueda_precio);
            $resultado->execute();

            header("Refresh:2; url=index.php");     
            echo "<h1>Datos insertados!</h1>";
            die();
        
        } catch (Exception $ex) {
            header("Refresh:3; url=error.php");
            echo "Fallo en la inserción de datos. " . $ex->getLine();
            die();

        }finally{
            $pdo=null;
            $resultado = null;
        }    
    ?>