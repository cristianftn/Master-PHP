<h1>Bienvenido a mi we MVC</h1>
<?php

    require_once 'controlador/usuario.php';

    if(isset($_GET['controlador']) && class_exists($_GET['controlador'])){
         $nombreControlador = $_GET['controlador'];
         $controlador = new $nombreControlador;

         if(isset ($_GET['action']) && method_exists($controlador, $_GET['action'])){
            $action = $_GET['action'];
            $controlador->$action();
        }else{
            echo"La pagina que buscas no existe";
        }
    }else{
        echo"La pagina que buscas no existe";
    }
   



    
?>