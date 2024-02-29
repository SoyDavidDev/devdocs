<!DOCTYPE html>
<html>
<head>
    <title>Tabla con Números Primos</title>
    <style>
        table{
            border-collapse: collapse;
        }

        td{
            width: 50px;
            height: 50px;
            text-align: center;
            border: 2px solid grey;
        }

        .prime{
            background-color: yellow;
        }
    </style>
</head>
<body>
    <table>
        <?php
      
      function esNumPrim ($num)
      {

        if ($num <=1) {
            return false;
        }

        for ($i=2; $i < $num; $i++) { 

            if ($num % $i == 0) {
                
                return false;
            }
        }
        return true;
      }


      $numero = 1;

      for ($fila=1; $i < 10; $i++) { 
        
        echo "<tr>";
        for ($columna=1; $columna < 11; $columna++) { 
            $clase = esNumPrim($numero) ? "prime" : "";
            echo "<td class = '$clase'>$numero</td>";
            $numero++;
        }
        echo "</tr>";
    }


        ?>
    </table>
</body>
</html>
