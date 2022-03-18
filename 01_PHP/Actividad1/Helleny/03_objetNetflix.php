<?php
require_once("03_claseNetflix.php");

$objNetflix= new Netflix("Harri Potter",1997, "SI", "29 febrero de 2022",6);
print_r('<pre>');
print_r ($objNetflix);
print_r('</pre>');

$objNetflix= new Netflix("Harri Potter",1997, "NO", "29 febrero de 2022",6);
print_r('<pre>');
print_r ($objNetflix->getPropiedades());
print_r('</pre>');
echo"Costo de alquiler: <br>".$objNetflix->CostoAlquiler('');

$objNetflix->setTitulo("Cielo Rojo");
echo"<h4>Nueva Pelicula</h4>";
echo "Titulo: ".$objNetflix->getTitulo();
echo"<br>Año de creacion:".$objNetflix->setAñoCreacion("2021").$objNetflix->getAñoCreacion();
echo"<br>Alquilada: ".$objNetflix->setAlquilada("No").$objNetflix->getAlquilada();
echo"<br>Disponible para alquiler: ".$objNetflix->setDisponible("Si").$objNetflix->getDisponible();
?>