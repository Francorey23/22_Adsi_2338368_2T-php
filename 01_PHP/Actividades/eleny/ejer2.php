<?php
$vrnombre = $_REQUEST["nombre"];
$vrhoras = $_REQUEST["horas"];
$vrpago = $_REQUEST["pago"];


if ($vrhoras <= 120) {
    $sueldo = $vrhoras * $vrpago;
    echo "El salario de $vrnombre sera de $sueldo";
}
if ($vrhoras > 120 and $vrhoras <= 136) {
    
}

?>
