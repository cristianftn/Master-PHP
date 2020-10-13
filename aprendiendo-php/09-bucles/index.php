<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

       
        $tabla = 0;
      
        for ($tabla = 0; $tabla <= 10; $tabla++) { 
            echo'<br>';
            echo 'tabla del '.$tabla;
            

            for ($num=0; $num <= 10; $num++) { 
            
             
                echo'<br>';
                echo $tabla .' * '.$num .' = ' . ($tabla*$num);
               
            }
            echo'<br>';
        }
        
    ?>

</body>
</html>