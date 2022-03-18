<?php

require_once("02_claseEmpleado.php");
require_once("01_clasePersona.php");

echo"<h3>Datos Clase Persona </h3>";
$objPersona= new Persona("Edy Santiago ",33);

echo"Nombre: ".$objPersona->getnombre();
echo"<br>Edad: ".$objPersona->edad;

echo"<h3>Datos del Empleado </h3>";
$objEmpleado= new Empleado("Juan Carlos",28, 3500000, 'activo');
echo"Nombre: ".$objEmpleado->getnombre();
echo"<br>Edad: ".$objEmpleado->edad;
echo"<br>Sueldo: ".$objEmpleado->sueldo;
echo"<br>Estado: ".$objEmpleado->estado;


?>