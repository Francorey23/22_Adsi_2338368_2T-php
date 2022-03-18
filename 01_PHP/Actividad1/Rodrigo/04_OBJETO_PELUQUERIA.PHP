<?php

require_once("04_CLASE_PELUQUERIA.PHP");

$objpeluqueria= new peluqueria(46416, "zeus", "Carrera 28N", 3122513212, "8:00", "18:00", 10000, "Corte_Diesel");
$objpeluqueria->getpeluqueria();

print_r('<pre>');
print_r($objpeluqueria);
print_r('</pre>');

echo  $objpeluqueria->getagendarcita() . "<br>";
echo $objpeluqueria->getservicio() . "<br>";
echo $objpeluqueria->setservicio("el 7") . "<br>";
echo $objpeluqueria->getservicio() . "<br>";
echo " el valor del corte es: " . $objpeluqueria->getvalor_corte() . "<br>";
echo $objpeluqueria->setservicio("el pepe") . "<br>";
echo $objpeluqueria->getservicio() . "<br>";
echo "el valor del corte es: " . $objpeluqueria->setvalor_corte("120000");
echo $objpeluqueria->getvalor_corte() . "<br>";






?>