<?php

require_once("02_APRENDIZ.PHP");

$objaprendiz = new aprendiz (1002968664, "Rodrigo", "Andres", "Español", 1.0, 1.0, 5.0);
$objaprendiz->getaprendiz();

print_r('<pre>');
print_r($objaprendiz);
print_r('</pre>');

echo "Aprendiz: " .$objaprendiz->nombre . $objaprendiz->apellido . " su nota definitiva es: " . $objaprendiz->getDefinitiva() . "<br>";
echo "Su calificacion es: " . $objaprendiz->getConceptovalorativo() . "<br>";

echo "Usted: " .$objaprendiz->getvaloracionCualitativa();










?>