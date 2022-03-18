<?php
require_once("01_Claseempleado.php");

$objempleado = new Empleado("Jose Manuel Ordoñez", 3209458636, "Contador", 980000);

echo "<h2> Datos de la clase empleado </h2>";
echo "Numero de Celular : " .$objempleado->getCelular()."<br>";
echo "Nombre : " .$objempleado->getNombre()."<br>";

$objempleado->getDatosEmpleado();
print_r('<pre>');
print_r($objempleado);
print_r('</pre>');
echo Empleado::$auxilio_t;

?>