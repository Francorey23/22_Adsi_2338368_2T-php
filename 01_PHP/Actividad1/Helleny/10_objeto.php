<?php
require_once("10_claseZapatos.php");
require_once("10_claseDeportivos.php");


$objZapato= new Zapatos(34,"Puma",23);
print_r("<pre>");
echo"<h4>Clase zapatos</h4>";
print_r($objZapato);
print_r("</pre>");

$objDeporte= new Deportivo(23,"Puma",23,"Deportivos",100000,24);
print_r("<pre>");
echo"<h4>Clase Deportivos </h4>";
print_r($objDeporte);
print_r("</pre>");
print_r("<pre>");

print_r(($objDeporte->getVerInventario())."!!");
print_r("</pre>");

?>