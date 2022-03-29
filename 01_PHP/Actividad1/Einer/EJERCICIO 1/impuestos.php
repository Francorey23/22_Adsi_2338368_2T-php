<?php 

require_once("Empleado.php");


$objPersona = new Persona(100201100,"Juan Perez", 21);
echo "Cedula: " . $objPersona->getCedula()."<br>";

$objPersona->setCedula(20001001);
echo "Cambio de cedula: " . $objPersona->getCedula()."<br>";


echo "<h2>DATOS DE LA CLASE CLIENTE</h2>";
$objCliente = new Cliente(30713456, "Ana Maria Reyes", "anareyes@hotmail.com",28);
echo "Cedula cliente: " . $objCliente->getCedula()."<br>";
$objCliente2 = new Cliente(27304560,"Juan Diego Pelaez","juandiego@hotmail.com",32);
echo "Cedula cliente: " . $objCliente2->getCedula()."<br>";
echo "Edad cliente: " . $objCliente2->nombre."<br>";


//end clase

?>