<?php
require_once("04_clasePeluqueria.php");
$objPeluqueria =  new peluqueria("Peluqueria Nuevo estilo",10210,"Popayan calle 26  bn 3a", 2456339, "7:00 AM","7:00 PM", "5000", "Corte pelo");
print_r('<pre>');
print_r($objPeluqueria);
print_r('</pre>');

echo"<h4>Nuevo servicio</h4>";
echo"Servicio: ".$objPeluqueria->setServicio("Arreglo Uñas").$objPeluqueria->getServicio();
echo"<br>Valor corte: ".$objPeluqueria->setValor("10000").$objPeluqueria->getValor();
?>