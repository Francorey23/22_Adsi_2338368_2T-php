<?php 




require_once ("Netflix.php");

$objpelicula = new Netflix("Black Jack",2005,"si",date("j-m-y"));

print_r('<pre>');
print_r($objpelicula);
print_r('<pre>');
   


$objpelicula ->setValor();

?>