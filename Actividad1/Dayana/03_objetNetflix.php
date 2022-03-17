<?php
require_once("03_claseNetflix.php");

$objNetflix= new Netflix("Encanto",2021, "Si", "03 Marzo de 2022",6);

print_r('<pre>');
print_r ($objNetflix->getPropiedades());
print_r('</pre>');

print_r('<pre>');
print_r ($objNetflix);
print_r('</pre>');

echo"<br>Costo de alquiler: <br>".$objNetflix->CostoAlquiler('');




?>