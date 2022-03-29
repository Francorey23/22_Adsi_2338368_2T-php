<?php 
   
   require_once("Empleado.php");
    
    
   $objEmpleado = new Empleado("PABLO HERNANDEZ",320565489,"DOCENTE", 4000000,4000000*0.05);
   $objEmpleado->getDatosEmpleado();
   print_r('<pre>');
   print_r($objEmpleado);
   print_r('<pre>');

 

   echo "<h2>El empleado (a):  " .$objEmpleado->getNombre()."<br><br>";
   echo $objEmpleado->getImpuesto()."<br>";
   


?>