<?php
require_once("01claseEmpleado.php");
require_once("02claseUsuario.php");
require_once("03claseCliente.php");

$objEmpleado= new Empleado("David zambrano",3173505667,"secretario",3750000 ,2000);
echo "<h2>datos de la claseEmpleado </h2>";

print_r('<pre>');
print_r($objEmpleado);
print_r('</pre');
echo"Nombre: ".$objEmpleado->nombre;

echo"<p>";
echo "<h3>datos del Empleado </h3>";
echo"<br>Celular: ".$objEmpleado->getcelular();
echo"<p>";
echo"<br>sueldo: ".$objEmpleado->setsueldo(3750000);
$objEmpleado->setsueldo(3750000);
echo$objEmpleado->getsueldo();
echo"<p>";
echo" Empleado:".$objEmpleado->getnombre();
echo"<p>";

echo"<p>";
echo "<h3>debe pagar una rete fuente de 9%</h3>";







?>