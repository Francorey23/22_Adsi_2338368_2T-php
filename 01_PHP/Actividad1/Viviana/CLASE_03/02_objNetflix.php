<?php
require_once("01_claseNetflix.php");

$objNetflix= new Netflix("El Castillo En El Cielo",2022, "Si", "13 Marzo de 2022",6);

print_r('<pre>');
print_r ($objNetflix->getPropiedades());
print_r('</pre>');

print_r('<pre>');
print_r ($objNetflix);
print_r('</pre>');

echo"<br>Costo Del Alquiler: <br>".$objNetflix->CostoAlquiler('');



?>