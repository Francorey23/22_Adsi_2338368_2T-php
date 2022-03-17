<?php
require_once("01clasePersona.php");
require_once("02claseEmpleado.php");
require_once("03claseContador.php");


$objetoPersona= new Persona("Lucila",20);
echo "nombre: ".$objetoPersona->nombre;
echo"<br>Edad: ".$objetoPersona->edad;

$objetoEmpleado= new Empleado("Amalia",26,4000);
echo"<br>Nombre: ".$objetoEmpleado->nombre;
echo"<br>Edad: ".$objetoEmpleado->edad;
echo"<br>Sueldo: ".$objetoEmpleado->sueldo;

$objetoContador=new contador("Natalia",34,1500,20);
echo"<br>Nombre: ".$objetoContador->nombre;
echo"<br>Edad: ".$objetoContador->edad;
echo"<br>Sueldo: ".$objetoContador->sueldo;
echo"<br>Dias trabajados: ".$objetoContador->diastrabajados();


?>
?>