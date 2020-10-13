<?php
    /**
     * Crear un array con el contenido de la tabla
     *  ACCION        AVENTURA        DEPORTES
     *   GTA          ASSASINS          FIFA19
     *   COD            CRASH           PES19
     *   PUBGB          PRINCE OF       MOTO GP 19
     *                  PERSIA
     * 
     * cada columna debe ir en un fichero aparte (includes)
     */  

       $tabla = [
         "Accion" => [
            'GTA',
            'COD',
            'PUBGB'
         ],
         "Aventura" => [
            'Assansins',
            'Crash',
            'Prince of persia'
         ],
         "Deportes" => [
            'FIFA19',
            'PES19',
            'Moto GP 19'
         ],
        ]; 

        $categorias = array_keys($tabla);
?>

    <table border="1">
        <tr>
            <?php include('ejercicio5-encabezado-tabla.php'); ?>
        </tr>
        <tr>
           <?php include('ejercicio5-primera-fila.php'); ?>
        </tr>
        <tr>
            <?php include('ejercicio5-segunda-fila.php'); ?>
        </tr>
        <tr>
            <?php include('ejercicio5-tercera-fila.php'); ?>
        </tr>
    </table>
    
