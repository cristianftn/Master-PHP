<?php
//recoger dos numeros por url (GET) y hacer una calculadora con ellos (suma, resta, multiplicaion, division)


    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];


    echo 'SUMA: ' . ($numero1+$numero2).'<br>';
    echo 'RESTA: ' . ($numero1-$numero2).'<br>';
    echo 'MULTIPLICACION: ' . ($numero1*$numero2).'<br>';
    echo 'DIVISION: ' . ($numero1/$numero2).'<br>';



?>