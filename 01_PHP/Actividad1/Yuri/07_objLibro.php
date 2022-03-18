<?php

require_once("07_claseLibro.php"); 

$objlibro = new Libro (978395730839,"CIEN AÑOS DE SOLEDAD","Grabriel Garcia Maquez",471); 


$objlibro->getDato();
print_r('<pre>');
print_r($objlibro );
print_r('</pre');
//10507846,"SEMANA","Felipe López Caballero","Semana",442

$objlibro = new revista(10507846,"SEMANA","Felipe Lopez Caballero","semana",442);
 
$objlibro->getDatos();
print_r('<pre>');
print_r($objlibro );
print_r('</pre');
 


?>
