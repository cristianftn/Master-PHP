
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php


/* if (isset($_GET['numero']) ) {
    $tabla = $_GET['numero'];


    echo "Tabla del $tabla". "<br>";

    for ($numero = 0; $numero <=10 ; $numero++) { 
        echo"$tabla * $numero = " . ($tabla * $numero) . "<br>";
    }

}else{
    echo'No se ha introducido ningún numero';
} */


    function calculadora($num1, $num2){
        $suma = $num1 + $num2;
        $resta = $num1 - $num2;
        $multiplicacion = $num1 * $num2;
        $division = $num1 % $num2;

        echo"La suma es: " . $suma . "<br>";
        echo"La resta es: " . $resta . "<br>";
        echo"La multiplicaicon es: " . $multiplicacion . "<br>";
        echo"La division es: " . $division . "<br>";
    }

    calculadora(5,2);
    calculadora(1,2);

?>
    
</body>
</html>

