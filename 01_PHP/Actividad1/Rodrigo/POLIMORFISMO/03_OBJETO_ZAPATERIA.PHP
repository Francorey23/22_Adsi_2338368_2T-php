<?php

require_once("03_CLASE_ZAPATERIA.PHP");
require_once("03_CLASE_DEPORTIVO.PHP");

$objzapateria= new zapatos (39, "Nike", 12);
$objzapateria->getVerinventario();

print_r('<pre>');
print_r($objzapateria);
print_r('</pre>');

$objdeportivo= new deportivo(39, "Nike", 12, "Blanco", 1200000, 10);
$objdeportivo->getVerinventario();

echo "<h3>Datos</h3>";

print_r('<pre>');
print_r($objdeportivo);
print_r('</pre>');

 $objdeportivo->getVerinventario();




?>