<?php
require_once("01_clasePeluqueria.php");
$objPeluqueria =  new peluqueria("Corte & Cambio ","Marlene Acosta","Cr 9B 10-44", 8223366, "7:00am","8:00pm", "12000", "largo");
print_r('<pre>');
print_r($objPeluqueria);
print_r('</pre>');


?>