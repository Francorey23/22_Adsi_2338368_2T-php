<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>FORMULARIO DE OPERACIONES ARITMETICAS</h2>

    <p></p>
    <form action="Operaciones_Aritmeticas.php" method = "POST">
        <label>Digita el numero 1:  </label><br>
        <input type="number" name="numero1"><br>
        <label>Digita el numero 2: </label><br>
        <input type="number" name="numero2"><br>
        <br>
        <br>
        <input type="radio" name="operacion" value="Suma">suma</input>
        <input type="radio" name="operacion" value="Resta">resta</input>
        <input type="radio" name="operacion" value="Multiplicacion">multiplicacion</input>
        <input type="radio" name="operacion" value="Division">division</input>
        <input type="radio" name="operacion" value="Modulo">modulo</input>


        <input type="submit" name="btn_enviar" value="Ejecutar">

    </form>
</body>
</html>