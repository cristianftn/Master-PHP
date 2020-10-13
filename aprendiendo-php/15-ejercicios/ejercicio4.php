<?php
    /**
     * Crear un script que tenga 4 variables,
     * una de tipo array,
     * otra de tipo string,
     * otra int,
     * y otra boolean
     * y que imprima un mensaje segun el tipo de variable que sea.
     */

     $array=[12,13,14,15,1];
     $string = "Hola";
     $int = 10;
     $boolena = true;

   switch ($array) {
       case is_int($array):
           echo '$array es int';
           break;
       case is_string($array):
            echo '$array es string';
            break;
        case is_array($array):
                echo '$array es un array';
            break;
        case is_bool($array):
                echo '$array es booleana';
            break;

    
     }

 
?>