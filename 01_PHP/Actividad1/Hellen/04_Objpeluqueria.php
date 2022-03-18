<?php
require_once("04_Clasepeluqueria.php");
$objPeluqueria =  new Peluqueria("Jhon Jairo ", "TI", "Popayan Cauca", 3216957894, "05:30 AM", "09:30 PM", "15000", "24/7");

print_r('<pre>');
print_r($objPeluqueria);
print_r('</pre>');


?>