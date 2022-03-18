<?php

require_once("01_clasepeluqueria.php");

$objPeluqueria = new Peluqueria("45132","mexican" ,"obando","8322323","9:00am", "8:00pm","corte niño","$7000" );
$objPeluqueria->getPeluqueria();

print_r('<pre>');
print_r($objPeluqueria);
print_r('</pre>');

echo "su solicitud de servicio es : " . $objPeluqueria->getAgendarcita();