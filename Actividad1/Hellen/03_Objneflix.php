<?php
require_once("03_Claseneflix.php");

$objneflix = new Neflix("Crepusculo",2017,"si","no",02_06_2017);

echo "<h2> Datos de la clase neflix </h2>";
echo "Alquiler : " .$objneflix->getAlquilada()."<br>";

$objneflix->getNeflix();
print_r('<pre>');
print_r($objneflix);
print_r('</pre>');
echo Neflix::$alquilada;

?>