<?php
require_once("07_claseLibro.php");
require_once("07_claseRevista.php");
$objLibro=new Libro(298300," LA ILIADA","GABRIEL GARCIA MARQUEZ");

print_r("<pre>");
print_r($objLibro);
print_r("</pre>");

$objRevista=new Revista(200603,"EL PODER DE LA MENTE","JOSEPH MUERPHI ","XXX ", 210);
print_r("<pre>");
print_r($objRevista);
print_r("</pre>");


$objRevista=new Revista(11002,"BOULEVARD","FLOR M.SALVADOR","1",360);
//Function getter setter
echo"Nombre del libro: ".$objRevista->titulo;
echo"<br>Edicion: ".$objRevista->getedicion();
echo"<br>Numero de paginas: ".$objRevista->getpaginas();
echo"<br>Autor: " .$objRevista->getautor();

echo"<p>Nueva edicion:";
$objRevista->setedicion('1.2');
echo$objRevista->getedicion();
echo"<br>Numero de paginas: ";
$objRevista->setpaginas(388);
echo$objRevista->getpaginas();


?>