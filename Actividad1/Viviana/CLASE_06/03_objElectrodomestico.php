<?php
require_once("01_claseElectrodomestico.php");
require_once("02_objLavadora.php");

echo"<h3>CLASE ELECTRODOMESTICO</h3>";
$objElectro=new Electrodomestico('LG','');
echo"Lavadora Marca: ".$objElectro->marca;
echo"<br> Iva: ".Electrodomestico::$IVA;


echo"<h3>CLASE LAVADORA </h3>";
$objLavadora=new Lavadora('Wirpool',5,125000);
echo"Marca:".$objLavadora->getmarca();
echo"<br>Cantidad: ".$objLavadora->getcantidad();
echo"<br>Precio:".$objLavadora->getprecio();
echo"<br>total: ".$objLavadora->getventa('');

echo"<h3>CLASE NUEVA LAVADORA : </h3>";
$objLavadora=new Lavadora("LG",6,1130000);
echo"Marca: ".$objLavadora->marca;
echo"<br>Cantidad: ".$objLavadora->getcantidad();
echo"<br>Precio:".$objLavadora->getprecio();
echo"<br>total si: ".$objLavadora->getventa('');


?>