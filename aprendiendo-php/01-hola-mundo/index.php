<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web</title>
</head>
<body>
    <?php
        echo '<h1>hola mundo</h1>';
    ?>

    <input type="text" id="input" disabled>
    <input type="text" id="input2" disabled>

    <script>

    let objetos = [
        {
            "alignmentfliph": false,
            "clouds": "CRISTIAN",
            "colorsunbottom": "1 0 0.35",
            "colorsuntop": "1 0.85 0.05",
            "gridbackground": "0.1 0 0.1",
            "gridfar": "0 0 1",
            "gridnear": "1 0 0.2",
            "horizon": "0.05 0.15 0.4",
            "mountainscale": 1.9,
            "noisefx": 0.8,
            "rate": 75,
            "schemecolor": "0.5019607843137255 0 0.5019607843137255",
            "shading": 1.4
         },
         {
            "alignmentfliph": true,
            "clouds": "CRISTIAN Manoso Fontan",
            "colorsunbottom": "1 0 0.35",
            "colorsuntop": "1 0.85 0.05",
            "gridbackground": "0.1 0 0.1",
            "gridfar": "0 0 1",
            "gridnear": "1 0 0.2",
            "horizon": "0.05 0.15 0.4",
            "mountainscale": 1.9,
            "noisefx": 0.8,
            "rate": 75,
            "schemecolor": "0.5019607843137255 0 0.5019607843137255",
            "shading": 1.4
         },
    ]


   /*For (const objeto in objetos) {
       console.log(objetos[objeto])
     //  document.getElementById("input").value = objetos[objeto].clouds
     //  document.getElementById("input2").value = objetos[objeto].alignmentposition
    }*/
    
  /*  function pintar (){
        for (let index = 0; index < objetos.length; index++) {
        //const element = array[index];

        console.log(objetos[index].clouds);
        document.getElementById("input").value = objetos[0].clouds
        document.getElementById("input2").value = objetos[1].clouds
      }
    }

    pintar()
    


    function pokemon(){
        fetch('https://pokeapi.co/api/v2/pokemon/ditto')
      .then(response => response.json())
      .then(json => console.log(json))
    
    }

    pokemon();
   

    /*document.getElementById("input").value = objetos[0].clouds
    console.log(objetos[0].clouds);*/

    </script>

</body>
</html>