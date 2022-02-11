<?php 

require_once("02_claseCliente.php");

$objCliente = new Cliente("Carlos Agredo","carlos@gmail.com",23);

echo $objCliente->getEmail();
echo "<br>";
echo "Edad es: " . $objCliente->intEdad;

?>