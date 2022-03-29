<?php 
    //require llama al nombre del archivo para ser cargado en memoria RAM
    require_once("Torneo_de_Futbol.php");
    require_once("Partidos.php");
    
    
    $objequipo = new Torneo_de_Futbol("Deportivo Cali",30);
    echo "<h3>DATOS EQUIPO  1" ;
    $objequipo->getDatosEquipo();
   print_r('<pre>');
   print_r($objequipo);
   print_r('<pre>');    


   $objequipo = new Partidos("Deportivo Cali",30,10);
  
   
    $objequipo->getDatosEquipo();
  print_r('<pre>');
  print_r($objequipo);
  print_r('<pre>');   



  $objequipo = new Torneo_de_Futbol("America",30);
  echo "<h3>DATOS EQUIPO  2" ;
  $objequipo->getDatosEquipo();
 print_r('<pre>');
 print_r($objequipo);
 print_r('<pre>');    


 $objequipo = new Partidos("America",30,3);

 
  $objequipo->getDatosEquipo();
print_r('<pre>');
print_r($objequipo);
print_r('<pre>');   

  
  



?>