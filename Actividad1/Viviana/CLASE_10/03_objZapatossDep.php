<?php

require_once("01_claseZapatos.php");
require_once("02_claseDeportivos.php");

$objZapato= new Zapatos(38,"adidas",25);
print_r("<pre>");
echo"<h4>DESCRIPCION DE LOS ZAPATOS</h4>";
print_r($objZapato);
print_r("</pre>");

$objDeporte= new Deportivos(38,"adidas",30,"Deportivos",175000,20);
print_r("<pre>");
echo"<h4>DESCRIPCION DE ZAPATOS #2 </h4>";
print_r($objDeporte);
print_r("</pre>");
print_r("<pre>");

print_r(($objDeporte->getVerInventario())."!!");
print_r("</pre>");

?>