<?php
require_once("01_clasePersona.php");
require_once("02_claseEmpleado.php");
require_once("03_claseContador.php");

echo "<h3>Clase persona : </h3>";
$objetoPersona= new Persona("Juan Felipe",31);
echo "nombre: ".$objetoPersona->getnombre();
echo"<br>Edad: ".$objetoPersona->getedad(). "<br>";

echo "<h3>Clase Empleado : </h3>";
$objetoEmpleado= new empleado("Ana Julia",22,2500000);
echo"<br>Nombre: ".$objetoEmpleado->getnombre();
echo"<br>Edad: ".$objetoEmpleado->getedad();
echo"<br>Sueldo: ".$objetoEmpleado->getsueldo();

echo "<h3>Clase Contador : </h3>";
$objetoContador=new contador("Marcos Julio",32,2000000,20,5);
echo"<br>Nombre: ".$objetoContador->getnombre();
echo"<br>Edad: ".$objetoContador->getedad();
echo"<br>Sueldo: ".$objetoContador->sueldo;
echo"<br>Dias trabajados: ".$objetoContador->diastrabajados();


?>