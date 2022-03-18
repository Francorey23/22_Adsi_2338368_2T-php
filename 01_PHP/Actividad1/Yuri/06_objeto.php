<?php
require_once("06_classElectrodomestico.php");
require_once("06_classLavadora.php");

$objElectrodomestico=new electrodomestico('',"LG");
echo"Lavadora Marca: ".$objElectrodomestico->marca;
echo"Iva: ".$objElectrodomestico->iva;
echo "<br>";

$objLavadora=new lavadora('',"LG",5,1350000);
echo"Cantidad: ".$objLavadora->cantidad;
echo"Precio:".$objLavadora->precio;
echo"total: ".$objeLavadora->venta();

$objLavadora=new lavadora('',"Wirpool",8,1150000);
echo"Cantidad: ".$objLavadora->cantidad;
echo"Precio:".$objLavadora->precio;
echo"total si: ".$objeLavadora->venta();


?>