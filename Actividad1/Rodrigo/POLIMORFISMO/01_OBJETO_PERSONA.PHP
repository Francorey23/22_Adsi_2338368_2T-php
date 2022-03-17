<?php

require_once("01_CLASE_PERSONA.PHP");
require_once("01_CLASE_EMPLEADO.PHP");

echo "<h3>Datos de la persona</h3>";
$objpersona= new persona("Andrea", "16");
$objpersona->getpersona();

print_r('<pre>');
print_r($objpersona);
print_r('</pre>');
echo "<h3>Datos del empleado1</h3>";

$objempleado = new Empleados("rodrigo", 20, 1200000, "ACTIVO");
$objempleado->getestado();

print_r('<pre>');
print_r($objempleado);
print_r('</pre>');
echo "<h3>Datos del empleado2</h3>";

$objempleado = new Empleados("Andres", 20, 1200000, "INACTIVO");
$objempleado->getestado();

print_r('<pre>');
print_r($objempleado);
print_r('</pre>');










?>