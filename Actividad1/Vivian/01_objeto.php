<?php
require_once('01_empleado.php');
$objempleado= new Empleado('Sara Catalina',3231673151,"Vendedor",1000000,);

print_r('<pre>');
echo"<h3>Datos Empleados: </h3> ";
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
echo"<h3>Nuevo empleado:</h3>";
$objempleado->setnombre('Juan Carlos');
echo"Nombre: ".$objempleado->getnombre(); 
$objempleado->setcelular(310567823);
echo"<br>celular: ".$objempleado->getcelular();
$objempleado= new Empleado('Juan carlos',310567823,'Asistente Personal',3800000);
echo"<br>Cargo: ".$objempleado->cargo;
echo"<br>Suelo : ".$objempleado->getsueldo();
echo"<br>Porcentaje  Auxilio de transporte: ". Empleado::$auxilio. "%";
echo"<br>Total auxilio: ". (Empleado::$auxilio * $objempleado->getsueldo());
echo"<br>Retencion: ".$objempleado->retencion('');






?>