<?php
require_once("01clasePeluqueria.php");
$objPeluqueria =  new Peluqueria("Duvan ","morales","morales calle ·3  bn 3a", 3178149707, "8:00 AM","7:00 PM", "4000", "largo");
print_r('<pre>');
print_r($objPeluqueria);
print_r('</pre>');


?>