<?php
require_once("05_classPersona.php");
require_once("05_classEmpleado.php");
require_once("05_classContador.php");

echo "<h3>Clase persona : </h3>";
$objetoPersona= new persona("matias",35);
echo "nombre: ".$objetoPersona->getnombre();
echo"<br>Edad: ".$objetoPersona->getedad(). "<br>";

echo "<h3>Clase Empleado : </h3>";
$objetoEmpleado= new empleado("zonia",32,3000000);
echo"<br>Nombre: ".$objetoEmpleado->getnombre();
echo"<br>Edad: ".$objetoEmpleado->getedad();
echo"<br>Sueldo: ".$objetoEmpleado->getsueldo();

echo "<h3>Clase Contador : </h3>";
$objetoContador=new contador("Carlos",29,3500000,30,8);
echo"<br>Nombre: ".$objetoContador->getnombre();
echo"<br>Edad: ".$objetoContador->getedad();
echo"<br>Sueldo: ".$objetoContador->getsueldo();
echo"<br>Dias trabajados: ".$objetoContador->diastrabajados();


?>