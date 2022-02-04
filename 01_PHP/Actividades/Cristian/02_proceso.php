<?php

    $nombre = $_GET["nombre"];
    $hora = $_GET["horas"];
    $pago_hora = $_GET["pago_hora"];

    echo "Empleado: ".$nombre."<p>";


    if ($hora==120){
        $salario = $hora * $pago_hora;
        echo "El sueldo del empleado es: ".$salario;
    }elseif($hora-120<=16 ){

        $salario = $pago_hora * 120;
        $extra_hora = $hora-120;

        $extra =($pago_hora * 2)* $extra_hora;

        echo "El sueldo del empleado es: ".$salario."<p>";
        echo "El empleado cuenta con ".$extra_hora." horas extras el pago por horas Extras es: ".$extra."<p>";
        echo "Sueldo Total: ".$salario + $extra;
    }elseif($hora-120>16){
        

    }


?>