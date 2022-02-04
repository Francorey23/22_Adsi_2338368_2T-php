<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Captura</title>
</head>
<body>
    <h1>LIQUIDACION DEl SALARIO DE UN EMPLEADO</h1>
    <h2>INGRESE LOS DATOS</h2>
    <br>
    <p></p>
        <form action="02_proceso.php" method="get">
        <label>Digite el nombre del empleado:&nbsp;&nbsp;&nbsp;</label>
        <input type="text" name="nombre"><p>

        <label>Ingrese el total de horas:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="number" name="horas"><p>

        <label> Ingrese el pago por hora: </label>
        <input type="number" name="pago_hora"><p>

        <input type="submit" name="btn_enviar" value="Calcular">

        </form>
</body>
</html>