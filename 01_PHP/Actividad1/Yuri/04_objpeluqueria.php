<?php
require_once("04_classPeluqueria.php");
$objpeluqueria =  new peluqueria("Esteban ","BARBER SHOP","Cali calle 62 bn 3a", 62936781, "8:00 AM","9:00 PM", 15000, "un corte POMPADOUR");
print_r('<pre>');
print_r($objpeluqueria);
print_r('</pre>');


print_r('<pre>');
print_r ($objpeluqueria -> AgendarCita());
print_r('<pre>');
?>