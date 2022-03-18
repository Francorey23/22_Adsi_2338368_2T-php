<?php

require_once("03_CLASE_LIBRO.PHP");
require_once("03_CLASE_REVISTA.PHP");

$objlibro= new libro(45631, "100 años de soledad", "Gabriel Garcia Marquez");
$objlibro->getlibro();

print_r('<pre>');
print_r($objlibro);
print_r('</pre>');

echo "<h2> Datos del libro </h2>";

echo "Titulo del libro: " . $objlibro->titulo . "<br>";
echo "Autor del libro: " . $objlibro->autor . "<br>";
echo "Version  del libro: " . $objlibro->codigo . "<br>";

$objrevista= new revista (2, "100 años de soledad", "Gabriel Garcia Marquez", 2, 533);

echo "<h2> Datos revista </h2>";

echo "Edicion: " . $objrevista->edicion . "<br>";
echo "Numero de paginas: " . $objrevista->paginas . "<br>";

$objrevista1= new revista (2, "100 años de soledad", "Gabriel Garcia Marquez", 2, 533);

echo "<h2> Datos revista1 </h2>";

echo "Edicion: " . $objrevista->edicion . "<br>";
echo "Numero de paginas: " . $objrevista->paginas . "<br>";
echo "Edicion: " . $objrevista->setedicion(3);
echo $objrevista->getedicion() . "<br>";
echo "Numero de paginas: " . $objrevista->setpaginas(667);
echo $objrevista->getpaginas();








?>