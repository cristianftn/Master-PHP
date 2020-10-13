
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!--  //recoger dos numeros por url (GET) y hacer una calculadora con ellos (suma, resta, multiplicaion, division) -->

    <form action="ejercicio4-recoger-parametros.php" method="GET">
        <label for="numero1">introduce un numero</label>
        <input type="number" name="numero1" required>
        <br>
        <label for="numero2">introduce un numero</label>
        <input type="number" name="numero2" required>
        <br>
        <input type="submit">
    </form>
</body>
</html>