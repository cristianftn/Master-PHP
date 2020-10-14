<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" autofocus>
        <br>
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" pattern="[a-z A-Z ]+">
        <br>
       
        <input type="button" name="nombre" value="clickame">
        <br>


        <input type="submit">
    </form>
</body>
</html>
