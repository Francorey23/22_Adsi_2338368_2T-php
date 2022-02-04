<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par_impar</title>
</head>
<body>
    <h1>DATOS DE EMPLEADO </h1>
    <h2>FORMULARIO DE CAPTURA </h2>
    <br>
    <p></p>
    <h3>Ingrese siguientes datos: </h3>
    <br>
    <form action="ejer2.php" method = "get">
        <label>Nombre: </label>
        <input type= "text" name="nombre"><br>
        <label>Horas trabajadas : </label>
        <input type="number" name="horas"><br>
        <label>Pago por horas : </label>
        <input type="number" name="pago"><br>

        <input type="submit" name="btn_enviar" value="Ejecutar">

    </form>
</body>
</html>