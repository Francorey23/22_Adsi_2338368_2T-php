<?php
require_once("03_claseNetflix.php");

$objNetflix= new Netflix("DEADPOOL",2019, "Si", "26 febrero de 2022",6);

print_r('<pre>');
print_r ($objNetflix->getPropiedades());
print_r('</pre>');

print_r('<pre>');
print_r ($objNetflix);
print_r('</pre>');

echo"<br>Costo de alquiler: <br>".$objNetflix->CostoAlquiler('');




?>