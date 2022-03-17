<?php
require_once("01claseElectrodomestico.php");
require_once("02objLavadora.php");
echo"<h4>Clase Electrodomestico </h4>";
$objElectro=new Electrodomestico('samsug','');
echo"Lavadora Marca: ".$objElectro->marca;
echo"<br> Iva: ".Electrodomestico::$iva;


echo"<h4>Clase lavadora </h4>";
$objLavadora=new Lavadora('samsug',5,125000);
echo"Marca:".$objLavadora->getmarca();
echo"<br>Cantidad: ".$objLavadora->getcantidad();
echo"<br>Precio:".$objLavadora->getprecio();
echo"<br>total: ".$objLavadora->getventa('');

echo"<h4>Clase nueva lavadora2022: </h4>";
$objLavadora=new Lavadora("Wirpool",6,1130000);
echo"Marca: ".$objLavadora->marca;
echo"<br>Cantidad: ".$objLavadora->getcantidad();
echo"<br>Precio:".$objLavadora->getprecio();
echo"<br>total si: ".$objLavadora->getventa('');


?>


