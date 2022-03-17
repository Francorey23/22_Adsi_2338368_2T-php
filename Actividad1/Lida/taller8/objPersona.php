<?php

require_once("claseEmpleado.php");
require_once("clasePersona.php");

echo"<h3>Clase Persona </h3>";
$objPersona= new Persona("Duvan",23);

echo"Nombre: ".$objPersona->getnombre();
echo"<br>Edad: ".$objPersona->edad;

echo"<h3>Clase Empleado </h3>";
$objEmpleado= new Empleado("Juan",20, 300000, 'activo');
echo"Nombre: ".$objEmpleado->getnombre();
echo"<br>Edad: ".$objEmpleado->edad;
echo"<br>Sueldo: ".$objEmpleado->sueldo;
echo"<br>Estado: ".$objEmpleado->estado;


?>