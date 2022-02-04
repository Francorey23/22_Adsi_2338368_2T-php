<?php
if (isset($_POST["btn_enviar"]));{
    $nombre1 = $_REQUEST["nombre"];
    $horast = $_REQUEST["horas"];
    $valor = $_REQUEST["valorhora"];
    if ($horast > 120){
        $he=120 - $horast;
        if ($he < 16){
            $pago = $valor * 120 + ($he * $valor * 2);
            echo "El Valor a pagar incluida HHE es de : ", $pago;
        }
        else{ 
            $he2 = $he - 16;
            $pago = $valor * 120 + ($he * $valor * 2) + ($he2 * $valor * 3);
            echo "El Valor a pagar incluida HHE es de : ", $pago;
        }
        }


    }
?>