<?php
require_once("09_ClaseTorneodefutbol.php");
require_once("09_ClasePartidos.php");

$objeTorneofutbol= new Torneodefutbol("Brazil", 16,"");

print_r("<pre>");
echo"<h4>Clase Torneo de futbol</h4>";
print_r($objeTorneofutbol);
print_r("</pre>");

$objePartidos= new Partidos("Colombia",15," ",3,11);
print_r("<pre>");
echo"<h4>Clase Partidos</h4>";
print_r($objePartidos);
print_r("</pre>");

print_r("<pre>");
echo"<h4>Redificion Propiedad Estado</h4>";
print_r($objePartidos->getPropiedad());
print_r("</pre>");

?>