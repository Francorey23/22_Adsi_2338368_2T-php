<?php
require_once("04_clasePeluqueria.php");
$objPeluqueria =  new peluqueria("Martha",1234,"Popayan calle 42 bn 6a", 3167364713, "7:30 AM","8:00 PM", "9000", "largo");
print_r('<pre>');
print_r($objPeluqueria);
print_r('</pre>');


?>