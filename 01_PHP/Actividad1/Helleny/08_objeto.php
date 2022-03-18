<?php
require_once("08_clasePersona.php");
require_once("08_claseEmpleado.php");



$objPersona= new Persona("Maria",18);

print_r('<pre>');
echo"<h4>Clase Persona</h4>";
print_r($objPersona->getPersona());
print_r('</pre>');
echo"<br>";

$objEmpleado= new Empleado ("Luis Martinez",23,1000000,'');
print_r('<pre>');
echo"<h4>Clase Empleado </h4>";
print_r($objEmpleado);
print_r('/<pre>');

echo"<h4>Redefinicion de getPersona: </h4>";
print_r('<pre>');
print_r($objEmpleado->getPersona());
print_r('</pre>');

?>