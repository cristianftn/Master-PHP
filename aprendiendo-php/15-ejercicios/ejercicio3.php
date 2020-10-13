<?php
   // Programa que compruebe si una variable está vacia y si está vacia rellenarla con texto en minuscula y mostrarlo con mayusculas y negrita

   $variable;

   if(empty($variable)){
       echo 'está vacia';
       echo"<br>";
       $variable = "hola como estas?";
       echo "<b>".strtoupper($variable)."</b>";
   }else{
       echo 'No esta vacia';
   }
?>