<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<title>Ejercicio 3</title>

<body>
    <div class="container" style="margin-top: 5%;">
        <?php

        $numero1 = $_REQUEST["numero1"];
        $numero2 = $_REQUEST["numero2"];
        $operacion = (int)$_REQUEST["operacion"];

        switch ($operacion) {
            case 1:
                echo $numero1." + ".$numero2." = " .($numero1+$numero2);
                break;
            case 2:
                echo $numero1." - ".$numero2." = " .($numero1-$numero2);
                break;
            case 3:
                echo $numero1." * ".$numero2." = " .($numero1*$numero2);
                break;
            case 4:
                echo $numero1." / ".$numero2." = " .($numero1/$numero2);
                break;
            case 5:
                echo $numero1." % ".$numero2." es " .($numero1%$numero2);
                break;
        }
        ?>
        <br>
        <a href="http://localhost/examenPHP/index.php">Regresar</a>
    </div>


</html>