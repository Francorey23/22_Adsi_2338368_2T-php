<?php
require_once('01_classEmpleado.php');
$objempleado= new Empleado("salvador torres silva",304657892,"gerente",1000000,);

print_r('<pre>');
echo"<h3>Datos del Empleado: </h3> ";
print_r($objempleado);
print_r('</pre>');

//metodo array
print_r('<pre>');
print_r($objempleado->getDatosEmpleados());

echo"Suelo : ".$objempleado->getsueldo();
echo"<br>Porcentaje  Auxilio de el transporte: ". Empleado::$auxilio_t. "%";
echo"<br>Total auxilio: ". (Empleado::$auxilio_t * $objempleado->getsueldo());
echo"<br> retencion: ".$objempleado->retencion('');


//metodo setter
echo"<h3>Nuevo empleado:</h3>";
$objempleado->setnombre("juliana lopez");
echo"Nombre del empleado: ".$objempleado->getnombre(); 
$objempleado->setcelular(3239874652);
echo"<br>celular: ".$objempleado->getcelular();
$objempleado= new Empleado('Maria Guerrero',3239874652,"secretaria",2800000);
echo"<br>Cargo: ".$objempleado->cargo;
echo"<br>Suelo : ".$objempleado->getsueldo();
echo"<br>Porcentaje  Auxilio de transporte: ". Empleado::$auxilio_t. "%";
echo"<br>Total auxilio: ". (Empleado::$auxilio_t * $objempleado->getsueldo());
echo"<br>retencion: ".$objempleado->retencion('');
