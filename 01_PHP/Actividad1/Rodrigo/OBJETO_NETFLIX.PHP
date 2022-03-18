<?php

require_once("CLASE_NETFLIX.PHP");

$objNetflix= new Netflix ('El coco', 2020, "No disponible", "26 de febrero", 4);
$objNetflix->getNetflix();

print_r('<pre>');
print_r($objNetflix);
print_r('</pre>');

echo "El nombre de la pelicula  es :" . $objNetflix-> getnombre() . "<br>";
echo "El año de la pelicula es :" . $objNetflix-> getaño() . "<br>";
echo "Disponible : "  .$objNetflix->getdisponibilidad() . "<br>"; 
echo "La fecha de devolucion es : "  .$objNetflix->getfecha_devolucion() . "<br>"; 
echo "El valor del alquiler es: " .$objNetflix->CostoAlquiler();



?>