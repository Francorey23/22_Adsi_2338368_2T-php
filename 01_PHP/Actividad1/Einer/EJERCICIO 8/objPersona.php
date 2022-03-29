<?php 
    //require llama al nombre del archivo para ser cargado en memoria RAM
    require_once("Empleado.php");
    require_once("Persona.php");
    

    $objPersona = new Persona("Juan Perez", 21);
    
    $objPersona->getDatosEmpleado();
   print_r('<pre>');
   print_r($objPersona);
   print_r('<pre>');    


   $objPersona2 = new Empleado("Juan Perez", 21,3000000);
  
   
    $objPersona2->getDatosEmpleado();
  print_r('<pre>');
  print_r($objPersona2);
  print_r('<pre>');   

  $objPersona2->setestado("ACTIVO");
  echo "estado " . $objPersona2->getestado();
    
  echo "<br>";
  echo "<br>";
  echo "<br>";
  $objPersona2 = new Empleado("Juan Perez", 21,3000000);
    
  $objPersona2->getDatosEmpleado();
 print_r('<pre>');
 print_r($objPersona2);
 print_r('<pre>');    
  $objPersona2->setestado("INACTIVO");
  echo "estado " . $objPersona2->getestado()."<br>";



?>