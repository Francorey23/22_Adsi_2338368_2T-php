<?php
require_once("01_claseLibro.php");
require_once("02_claseRevista.php");

$objLibro=new libro(123,"Cien Años De Soledad ","Gabriel Garcia Marquez");
echo"<h4> Datos Clase Libro </H4>";
echo "Codigo libro: ". $objLibro->getcodigo()."<br>";
echo "Nobre libro: ". $objLibro->gettitulo()."<br>";
echo "Autor: ". $objLibro->getautor()."<br>";



$objRevista= new revista(15792346,80,"SEMANA",2015,176);
echo"<h4> Datos Clase Revista</H4>";
echo "Edicion: ". $objRevista->getedicion()."<br>";
echo "Numero de paginas: ". $objRevista->getpaginas()."<br>";



?>