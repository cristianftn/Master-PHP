<?php
// hacer un programa que tenga una array con 8 numeros enteros y que haga lo siguiente:
    //recorrerlo y mostrarlo
    //ordenarlo y mostrarlo
    //mostrar su longitud
    //buscar algun elemento (buscar por el parametro que me llegue por url)

$numeros =[1,10,20,30,43,5,12,90];

/* foreach ($numeros as $numero) {
    echo $numero . "<br>";
}

sort($numeros);
var_dump($numeros);


echo count($numeros);


echo"<br>";
echo array_search(90, $numeros);
echo"<br>"; */

if(isset($_GET['numero'])){
    $numero = $_GET['numero'];
    echo $numero." esta en la posicion: ".array_search($numero, $numeros);

}
?>