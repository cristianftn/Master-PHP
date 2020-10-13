<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <!--  Mostrar una tabla html con las tablas de multiplicar del 1 al 10 -->


<?php

   
   echo "<table border='1'>";

    for ($cabecera=0; $cabecera <= 10 ; $cabecera++) { 
        echo"<th>Tabla del " . $cabecera . "</th>";
    }

    for ($tabla=0; $tabla <= 10 ; $tabla++) { 
        echo"<tr>";
        for ($numero=0; $numero <= 10 ; $numero++) { 
           
            echo"<td>".$tabla."*".$numero."=".($tabla*$numero)."</td>";
            
        }
        echo"</tr>";
    }
    echo"</table>";
?>
    
</body>
</html>