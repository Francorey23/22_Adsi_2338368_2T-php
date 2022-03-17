<?php
require_once("02_Claseaprendiz.php");

$objaprendiz = new Aprendiz("Jose Manuel" "Ordoñez Ordoñez" "Idiomas", 3, 5, 1038369963);

echo "<h2> Datos de la clase Aprendiz </h2>";
echo "Documento de identidad : " .$objaprendiz->getDocumento_identidad()."<br>";

$objaprendiz->getAprendiz();
print_r('<pre>');
print_r($objaprendiz);
print_r('</pre>');
echo Aprendiz::$Documento_identidad;

?>