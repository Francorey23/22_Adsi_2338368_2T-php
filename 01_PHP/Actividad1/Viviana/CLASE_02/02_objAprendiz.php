<?php
require_once("01_claseAprendiz.php");
$objaprendiz=new aprendiz("Juan Jose","Gil Montilla",1061696891, "Ingles",4,4,5);

print_r("<pre>");
print_r($objaprendiz);
print_r("</pre");
echo"<br>Aprendiz: </br>".$objaprendiz->getnombre()." ". $objaprendiz->getapellido()."</br>";
echo"<br>Calificacion Definitiva: </br>".$objaprendiz->definitiva();
echo"<br>Concepto Valorativo: </br>".$objaprendiz->getConceptoValorativo();
echo"<br>Valoracion Cualitativa: </br>".$objaprendiz->ValorCualitativa();


?>