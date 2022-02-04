<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<title>Ejercicio 1</title>

<body>
    <div class="container" style="margin-top: 5%;">
        <?php

        $numero = $_REQUEST["numero"];
        if($numero % 2 == 0){
            echo "El numero es par";
        }else{
            echo "El numero es impar";
        }

        ?>
    </div>
    <a href="http://localhost/examenPHP/index.php">Regresar</a>

</html>