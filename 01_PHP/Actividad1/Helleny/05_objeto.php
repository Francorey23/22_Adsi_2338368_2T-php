
<?php
require_once("05_clasePersona.php");
require_once("05_claseEmpleado.php");
require_once("05_claseContador.php");

echo"<h3>Clase persona: </h3>";
$objetoPersona= new persona("Luis",25);
echo "Nombre: ".$objetoPersona->getnombre();
echo"<br>Edad: ".$objetoPersona->getedad()."<br>";

echo"<h3>clase empleado: </h3>";
$objetoEmpleado= new empleado("maria",23,20000);
echo"Nombre: ".$objetoEmpleado->getnombre();
echo"<br>Edad: ".$objetoEmpleado->getedad();
echo"<br>Pago por horas: ".$objetoEmpleado->getsueldo();

echo"<h3>Clase Contador: </h3>";
$objetoContador=new contador("marcela",34,15000,30);
echo"Nombre: ".$objetoContador->getnombre();
echo"<br>Edad: ".$objetoContador->getedad();
echo"<br>Pago por horas: ".$objetoContador->getsueldo();
echo"<br>Dias laborados: ".$objetoContador->getDiaslaborados();
echo"<br>Total de dias trabajados: ".$objetoContador->diastrabajados();


?>