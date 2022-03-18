<?php
require_once("01claseLibro.php");
require_once("02objRevista.php");
$objLibro=new Libro(296890," EL PERFUME","Patrick Suskind");

print_r("<pre>");
print_r($objLibro);
print_r("</pre>");

$objRevista=new Revista(200504,"NUEVA MODA2022","Patrick Suskind ","XL ", 130);
print_r("<pre>");
print_r($objRevista);
print_r("</pre>");

$objeotro=new Revista(11103,"PERFUME"," Valentino  ","	1985.",3300000);
echo"Nombre del libro: ".$objeotro->titulo;
echo"<br>Edicion: ".$objeotro->getedicion();
echo"Numero de paginas: ".$objeotro->getpaginas();

?>