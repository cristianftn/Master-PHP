<?php

//para mostra el valor de las cookies, tengo que usar $_COOKIE,  una variable superglobal, es un array asociativo

if(isset($_COOKIE['miCookie'])){
    echo "<h1>".$_COOKIE['miCookie']."<h1>";
}else{
    echo 'No existe la cookie';
}

if(isset($_COOKIE['unAno'])){
    echo "<h1>".$_COOKIE['unAno']."<h1>";
}else{
    echo 'No existe la cookie';
}

echo "<br>";


?>

<a href="crear_cookies.php">crear cookies</a>
<a href="borrar_cookies.php">borrar mis cookies</a>