<?php
require_once("03_classNeflix.php");

$objPelicula= new Netflix("Texas Chainsaw Massacre",2022,"si","04 Marzo del 2022",3);
print_r('<pre>');
print_r ($objPelicula);
print_r('</pre>');

echo"<br>Costo de alquiler: <br>".$objPelicula->CostoAlquiler('');




?>