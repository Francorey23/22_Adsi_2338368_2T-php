<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>DATOS </h1>
    <h2>FORMULARIO DE CAPTURA </h2>
    <br>
    <p></p>
    <h3>Ingrese numeros a operar </h3>
    <br>
    <form action="ejer3.php" method = "get">
        <label>Numero 1: </label>
        <input type= "number" name="num1"><br>
        <label>Numero 2 : </label>
        <input type="number" name="num2"><p>
        <label>Elija operacion : a(+), b(-), c(*), d(/), e(%)</label><br>
        <input type="tex" name="opc"><p>

        <input type="submit" name="btn_enviar" value="Ejecutar">

    </form>
</body>
</html>