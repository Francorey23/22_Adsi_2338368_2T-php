<?php
require_once("07_claseLibro.php");
require_once("07_claseRevista.php");

$objLibro=new libro(0125," LA ILIADA","GABRIEL GARCIA MARQUEZ");

echo"<h4>CLASE LIBRO </h4>";
$objLibro=new libro (12345,"Un grito desesperado",  "Carlos Cuauhtemoc Sánchez");
echo"codigo libro:".$objLibro->getcodigo();
echo"<br>Nombre libro: ".$objLibro->gettitulo();
echo"<br>Autor:".$objLibro->getautor();


echo"<h4>CLASE REVISTA : </h4>";
$objRevista=new revista(15792346, 80,"SEMANA",2019, 80);
echo"EDICION: ".$objRevista->getedicion();
echo"NUMERO DE PAGINAS: ".$objRevista->getpaginas();
