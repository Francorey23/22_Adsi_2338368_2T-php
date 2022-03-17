<?php
require_once("02_claseFutbol.php");
require_once("01_clasePartido.php");

$objFutbol= new Futbol("Cali", 15,"");

print_r("<pre>");
echo"<h4>Clase futbol</h4>";
print_r($clasePartido);
print_r("</pre>");

$objePartido= new Partido("Medellin",13," ",3,10);
print_r("<pre>");
echo"<h4>Clase Partido</h4>";
print_r($objePartido);
print_r("</pre>");

print_r("<pre>");
echo"<h4>Redificion Propiedad Estado</h4>";
print_r($objePartido->getPropiedad());
print_r("</pre>");

?>