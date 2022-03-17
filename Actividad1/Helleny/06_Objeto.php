<?php
require_once("06_claseElectrodomestico.php");
require_once("06_claseLavadora.php");

echo"<h4>Clase Electrodomestico </h4>";
$objElectro=new Electrodomestico('LG','');
echo"Lavadora Marca: ".$objElectro->marca;
echo"<br> Iva: ".Electrodomestico::$iva;


echo"<h4>Clase lavadora </h4>";
$objLavadora=new Lavadora('LG',5,1350000);
echo"Marca:".$objLavadora->getmarca();
echo"<br>Cantidad: ".$objLavadora->getcantidad();
echo"<br>Precio:".$objLavadora->getprecio();
echo"<br>total: ".$objLavadora->getventa('');

echo"<h4>Clase nueva lavadora: </h4>";
$objLavadora=new Lavadora("Wirpool",8,1150000);
echo"Marca: ".$objLavadora->marca;
echo"<br>Cantidad: ".$objLavadora->getcantidad();
echo"<br>Precio:".$objLavadora->getprecio();
echo"<br>total si: ".$objLavadora->getventa('');


?>