<?php
if (isset($_POST["eNVIANDO"]));{
    $nro1 = $_REQUEST["numero1"];
    $nro2 = $_REQUEST["numero2"];
    $simbolo = $_REQUEST["signo"];
    switch ($simbolo) {
        case "+":
            $rta = $nro1 + $nro2;
            echo "La suma fue de ", $rta;
            break;
        case "-":
            $rta = $nro1 - $nro2;
            echo "La resta fue de ", $rta;
            break;
        case "*":
            $rta = $nro1 * $nro2;
            echo "La multiplicacion fue de ", $rta;
            break;
        case "/":
                $rta = $nro1 * $nro2;
                echo "La multiplicacion fue de ", $rta;
                break;
    }
    }
    ?>