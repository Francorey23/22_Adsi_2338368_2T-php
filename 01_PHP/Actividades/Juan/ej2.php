<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<title>Ejercicio 2</title>

<body>
    <div class="container" style="margin-top: 5%;">
        <?php

        $numero = $_REQUEST["numero"];
        $costo = $_REQUEST["costo"];
        $axuExtra = 0;
        $hExtra = 0;
        $dinero = 0;
        if($numero > 120){
            $hExtra = $numero - 120;
            if($hExtra > 16){
                $axuExtra = $hExtra - 16;
                $dinero = (16*($costo*2))+($axuExtra*3);
                echo "El dinero por horas extras es de: ".$dinero;
            }else{
                $dinero = $hExtra * ($costo*2);
                echo "El dinero por horas extras es de: ".$dinero;
            }
        }else{
            $dinero = $costo*$numero;
            echo "El trabajador No realizo horas extra";
        }

        ?>
        <a href="http://localhost/examenPHP/index.php">Regresar</a>
    </div>
    

</html>