<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$peliculas = ['Batman', 'Spiderman', 'Superman', 'Iron man'];

$personas = [
    [
        'nombre' => 'Cristian',
        'apellidos' => 'Manoso Fontan',
    ],
    [
        'nombre' => 'Maren',
        'apellidos' => 'Bazaga enriquez'
    ],
];

//var_dump($personas[1]['nombre']);

foreach ($personas as $persona) {
   var_dump($persona) ;
}

/* echo $peliculas[0]; */

for ($i=0; $i < count($peliculas) ; $i++) { 

     //   echo $peliculas[$i]."<br>";


}


 foreach ($peliculas as $pelicula ) {
    //echo $pelicula;
} 

?> 

</body>
</html>