<?php

// Sesion: almacenar y persistir datos del usuario mientras que navega en un sitio web hasta que cierra sesion o cierra el navegador

// Iniciar la session

session_start();

$variableNormal = "Soy una cadena de texto";

$_SESSION['variable_persistente']= "Hola soy una sesion activa";

echo $variableNormal . "<br>";
echo $_SESSION['variable_persistente'];

?>