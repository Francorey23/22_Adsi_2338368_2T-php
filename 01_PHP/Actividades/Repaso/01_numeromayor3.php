<?php 
    //Determinar de 2 numeros dados cual es el mayor

    $vr_numero1 = 550;
    $vr_numero2 = 1400;
    $vr_numero3 = 90;

    if ($vr_numero1 > $vr_numero2 AND $vr_numero1 > $vr_numero3) {
        echo "El numero mayor es: ". $vr_numero1;
    }elseif ($vr_numero2 > $vr_numero1 AND $vr_numero2 > $vr_numero3) {
        echo "El numero mayor es: ". $vr_numero2;
    }else {
        echo "El numero mayor es: " . $vr_numero3;
    }

?>