<?php

require_once("01_CLASE_PERSONA.PHP");
require_once("CLASE_EMPLEADO.PHP");
require_once("01_CLASE_CONTADOR.PHP");

$objpersona= new persona("Andrea", "16");
$objpersona->getpersona();

print_r('<pre>');
print_r($objpersona);
print_r('</pre>');

$objempleado = new Empleados("rodrigo", 20, 1200000);
$objempleado->getvalor_hora();

print_r('<pre>');
print_r($objempleado);
print_r('</pre>');

$objcontador= new contador("rodrigo", 20, 1200000, 17);
$objcontador->getdias_trabajados();

print_r('<pre>');
print_r($objcontador);
print_r('</pre>');

echo "<h2> Datos del empleado</h2>";

$objcontador = new contador("rodrigo", 20, 30000, 18);
echo "Empleado: " . $objcontador->nombre . "<br>";
echo "el valor de la hora es: " . $objcontador->valor_hora . "<br>";
echo "los dias trabajados son: " . $objcontador->getdias_trabajados();




?>