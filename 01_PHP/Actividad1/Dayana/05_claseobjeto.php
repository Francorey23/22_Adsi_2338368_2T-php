
<?php
require_once("05_clasePersona.php");
require_once("05_claseEmpleado.php");
require_once("05_claseContador.php");

echo "<h3>Clase persona : </h3>";
$objetoPersona= new persona("Luis",25);
echo "nombre: ".$objetoPersona->getnombre();
echo"<br>Edad: ".$objetoPersona->getedad(). "<br>";

echo "<h3>Clase Empleado : </h3>";
$objetoEmpleado= new empleado("Josue",24,2000000);
echo"<br>Nombre: ".$objetoEmpleado->getnombre();
echo"<br>Edad: ".$objetoEmpleado->getedad();
echo"<br>Sueldo: ".$objetoEmpleado->getsueldo();

echo "<h3>Clase Contador : </h3>";
$objetoContador=new contador("Luciana",22,1500000,20,5);
echo"<br>Nombre: ".$objetoContador->getnombre();
echo"<br>Edad: ".$objetoContador->getedad();
echo"<br>Sueldo: ".$objetoContador->sueldo;
echo"<br>Dias trabajados: ".$objetoContador->diastrabajados();


?>