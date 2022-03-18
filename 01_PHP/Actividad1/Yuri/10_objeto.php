<?php 

require_once("10_claseZapatos.php");
require_once("10_claseDeportivos.php");

$objventa = new zapatos(35,"NIKE",100); 

 $objventa->getVerInventario(); 

print_r('<pre>');
print_r($objventa );
print_r('</pre'); 

$objventa = new deportivos(36,"ADIDAS",100,"Tienes a tu disposición una gran variedad de zapatos deportivos para
  todas las edades y enfocados en distintas disciplinas. El objetivo es que, sin importar dónde te encuentres, qué
  deporte practiques o en qué condiciones climáticas, cuentes con unas zapatillas adaptadas a tus necesidades. 
  Este calzado deportivo está fabricado con material textil Primeknit que se amolda a tu pie dándote mayor agarre y empuje",269999,50);

$objventa->getVerInventario(); 

print_r('<pre>');
print_r($objventa );
print_r('</pre');  






?>