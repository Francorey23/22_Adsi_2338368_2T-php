<?php
require_once('01_claseEmpleado.php');
$objempleado= new Empleado('Lucia Garcia',3108935142,"Ingeniero",1000000,);

print_r('<pre>');
echo"<h3>DATOS DEL EMPLEADO: </h3> ";
print_r($objempleado);
print_r('</pre>');

//metodo array
print_r('<pre>');
print_r($objempleado->getDatosEmpleados());

echo"Suelo : ".$objempleado->getsueldo();
echo"<br>Porcentaje  Auxilio de transporte: ". Empleado::$auxilio. "%";
echo"<br>Total auxilio: ". (Empleado::$auxilio * $objempleado->getsueldo());
echo"<br>Retencion: ".$objempleado->retencion('');

//metodo setter
echo"<h3>DATOS EMPLEADO:</h3>";
$objempleado->setnombre('Luis Miguel');
echo"Nombre: ".$objempleado->getnombre(); 
$objempleado->setcelular(3108426729);
echo"<br>celular: ".$objempleado->getcelular();
$objempleado= new Empleado('Luis Miguel',3108426729,'profesor',3800000);
echo"<br>Cargo: ".$objempleado->cargo;
echo"<br>Suelo : ".$objempleado->getsueldo();
echo"<br>Porcentaje  Auxilio de transporte: ". Empleado::$auxilio. "%";
echo"<br>Total auxilio: ". (Empleado::$auxilio * $objempleado->getsueldo());
echo"<br>Retencion: ".$objempleado->retencion('');

?>