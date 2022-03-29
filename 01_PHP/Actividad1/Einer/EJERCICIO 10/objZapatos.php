<?php 
    //require llama al nombre del archivo para ser cargado en memoria RAM
    require_once("Zapatos.php");
    require_once("Deportivos.php");
    
    
    $objZapatos = new Zapatos(38,"Nike",50);
    echo "<h3>DATOS TIENDA 1" ;
    $objZapatos->getInventario();
   print_r('<pre>');
   print_r($objZapatos);
   print_r('<pre>');    

   $objZapatos = new Deportivos(38,"Nike",50,"IMPORTADOS",number_format(300000,-2,",","."),60);
   echo "<h3>DATOS TIENDA 1" ;
   $objZapatos->getInventario();
  print_r('<pre>');
  print_r($objZapatos);
  print_r('<pre>');   

  
  



?>