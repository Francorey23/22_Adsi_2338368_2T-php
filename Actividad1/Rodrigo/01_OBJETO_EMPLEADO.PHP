<?php

require_once("01_CLASE_EMPLEADO.PHP");

$objempleado = new empleado ("Rodrigo", 3207769460, "gerente", 4200000, "");
$objempleado->getempleado();

print_r('<pre>');
print_r($objempleado);
print_r('</pre>');

echo "El nombre del empleado es :" . $objempleado-> getnombre() . "<br>";
echo "El celular del empleado es :" . $objempleado-> getcelular() . "<br>";
echo "el nombre del empleado es : "  .$objempleado->setnombre("andres") . "<br>"; 

echo " ". $objempleado->retefuente();







?>