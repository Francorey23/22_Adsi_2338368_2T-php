<?php

require_once("06_Claseelectrodomestico.php");
require_once("06_Claselavadora.php");

echo "<h2> Clase Electrodomestico </h2>";
$ObjElectrodomestico=new Electrodomestico ('SAMSUNG');
echo "<br> Lavadora: ".$Objelectrodomestico->Marca();
echo "<br> IVA: ".Electrodomestico::$IVA "<br>";

print_r('<pre>');
print_r($ObjElectrodomestico);
print_r('</pre>');

echo "<h2> Clase Lavadora </h2>";
$ObjLavadora=new Lavadora('SAMSUNG', 2, 1899900);
echo "<br> Marca:".$Objlavadora->getMarca();
echo "<br> Cantidad: ".$Objlavadora->getCantidad();
echo "<br> Precio:".$Objlavadora->getPrecio(). "<br>";

print_r('<pre>');
print_r($ObjLavadora);
print_r('</pre>');


?>