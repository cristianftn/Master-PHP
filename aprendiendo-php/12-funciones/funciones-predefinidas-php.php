<?php
    // debuggear
    $nombre = "Cristian Fontan";
    var_dump($nombre);

    // Fechas
    echo date('d-m-y');
    echo "<br>";
    echo time();
    echo "<br>";

    // Matematicas
    echo "Raiz cuadrada de 10: ".sqrt(10);
    echo "<br>";
    echo "Numero aleatorio entre 10 y 40: ".rand(10, 40);
    echo "<br>";
    echo"Numero pi: ".pi();
    echo "<br>";
    echo "Redondear numero con el numero de decimales: ".round(7.89123, 2);
    echo "<br>";


    //Mas funciones generales
    echo gettype($nombre); 
    echo "<br>";

    if(is_string($nombre)){
        echo "La variable es un string ";
    }
    echo "<br>";

    if(is_float($nombre)){
        echo "la variable no es un numero con decimales";
    }
    echo "<br>";

    if(isset($aaa)){
        echo "La variable existe";
    }else{
        echo "La vriable no existe";
    }

    echo "<br>";

    $frase = " hoola buenos dias!! ";
    var_dump(trim($frase)); //elimina espacios por detras y por delante
    echo "<br>";

    //eliminar variable o indices de arrays
    $year = 2020;
    unset($year);

?>
