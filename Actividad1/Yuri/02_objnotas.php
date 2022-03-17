<?php
require_once("02_classAprendiz.php");
$objnotas=new aprendiz("maria fernanda ","aguilar nuñez",34657981, "Arquitectura",4.5,5.0,5.0);

print_r("<pre>");
print_r($objnotas);
print_r("</pre");
echo"<br>Aprendiz: </br>".$objnotas->getnombre()." ". $objnotas->getapellido()."</br>";
echo"<br>Calificacion Definitiva: </br>".$objnotas->definitiva();
echo"<br>Concepto Valorativo: </br>".$objnotas->getConceptoValorativo();
echo"<br>Valoracion Cualitativa: </br>".$objnotas->ValorCualitativa();


?>