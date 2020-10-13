<?php

    $peliculas = ['Batman', 'Spiderman', 'Superman', 'Iron man'];
    $numeros = [10,265,34,4,53,6];


    //ordenar array por orden alfabetico

    /* asort($peliculas);
    var_dump($peliculas); */

    //ordenar array numerico de menor a mayor
    /* sort($numeros);
    var_dump($numeros); */

    //añadir elemento a array
    $peliculas[] = "El señor de los anillos";
    var_dump($peliculas);

    array_push($peliculas, 'Conan el barbaro');
    var_dump($peliculas);

    //eliminar elemento array
    unset($peliculas[2]);
    var_dump($peliculas);

    //eliminar ultimo elemento del array
    array_pop($peliculas);
    var_dump($peliculas);

    //contar numero de elementos
   echo count($peliculas);
    
?>