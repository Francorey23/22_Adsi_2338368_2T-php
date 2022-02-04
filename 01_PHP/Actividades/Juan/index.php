<!DOCTYPE html>
<!-- Juan Camilo Anacona Salazar -->

<html>
<script>
    document.addEventListener("DOMContentLoaded", load, false);

    function load() {
        document.querySelector('#btnEjercicio1').addEventListener('click', () => ejercicio1());
        document.querySelector('#btnEjercicio2').addEventListener('click', () => ejercicio2());
        document.querySelector('#btnEjercicio3').addEventListener('click', () => ejercicio3());

        document.querySelector('#divEj1').style.display = 'none'
        document.querySelector('#divEj2').style.display = 'none';
        document.querySelector('#divEj3').style.display = 'none';
    }

    function ejercicio1() {

        document.querySelector('#divEj1').style.display = 'block'
        document.querySelector('#divEj2').style.display = 'none';
        document.querySelector('#divEj3').style.display = 'none';
    }

    function ejercicio2() {
        document.querySelector('#divEj1').style.display = 'none'
        document.querySelector('#divEj2').style.display = 'block';
        document.querySelector('#divEj3').style.display = 'none';
    }

    function ejercicio3() {
        document.querySelector('#divEj1').style.display = 'none'
        document.querySelector('#divEj2').style.display = 'none';
        document.querySelector('#divEj3').style.display = 'block';
    }

    function blockSpecialChar(e) {
        var k;
        document.all ? k = e.keyCode : k = e.which;
        return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k >= 48 && k <= 57));
    }
</script>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Examen</title>
</head>

<body>
    <div class="container">
        <h1 style="text-align: center;">Menu</h1>
        <div class="row align-items-start">
            <div class="col">
                <h2 style="text-align: center;">Seleccione un ejercicio</h2>
                <div>
                    <button id="btnEjercicio1" type="button" class="btn btn-primary">Ejercicio 1</button>
                    <button id="btnEjercicio2" type="button" class="btn btn-primary">Ejercicio 2</button>
                    <button id="btnEjercicio3" type="button" class="btn btn-primary">Ejercicio 3</button>
                </div>

            </div>
            <div class="col">
                <h2 style="text-align: center;">Formulario</h2>
                <div id="divEj1">
                    <h5>Ejercicio 1</h5>
                    <form action="ej1.php" method="post">
                        <label>Ingrese numero</label>
                        <input type="number" name="numero" required>
                        <br>
                        <input id="btnEj1" type="submit" name="btn_enviar" value="EJECUTAR">
                    </form>
                </div>
                <div id="divEj2">
                    <h5>Ejercicio 2</h5>
                    <form action="ej2.php" method="post">
                        <label>Ingrese las horas de trabajo</label>
                        <input type="number" name="numero" required>
                        <br>
                        <label>Ingrese precio hora normal</label>
                        <input type="number" name="costo" required>
                        <br>
                        <input id="btnEj2" type="submit" name="btn_enviar" value="EJECUTAR">
                    </form>
                </div>
                <div id="divEj3">
                    <h5>Ejercicio 3</h5>
                    <form action="ej3.php" method="post">
                        <label>Ingrese el numero 1</label>
                        <input type="number" name="numero1" required onkeypress="return blockSpecialChar(event)">
                        <br>
                        <label>Ingrese el numero 2</label>
                        <input type="number" name="numero2" required onkeypress="return blockSpecialChar(event)">
                        <br>
                        <label>Seleccione la operacion</label>
                        <select class="form-select" aria-label="Default select example" name="operacion">
                            <option value="1">suma</option>
                            <option value="2">resta</option>
                            <option value="3">multiplicacion</option>
                            <option value="4">division</option>
                            <option value="5">modulo</option>
                        </select>
                        <br>
                        <input id="btnEj3" type="submit" name="btn_enviar" value="EJECUTAR">
                    </form>
                </div>
            </div>

        </div>
    </div>

</body>



</html>