<?php 
   
   require_once("Aprendiz.php");
    
    
   $objAprendiz = new Aprendiz(1005236468,"Hernandez Romero","Andres","Matematicas",(4.8)*0.30,(4.5)*0.30,(5.0)*0.40);
   echo "<h2 DATOS DEL APRENDIZ"."<br><br>"; 
   $objAprendiz->getDatosAprendiz();
   print_r('<pre>');
   print_r($objAprendiz);
   print_r('<pre>');

 

   echo "<h3> NOTA DEFINITIVA" ."<br><br>";
   echo $objAprendiz->getNotadefinitiva();

  
   echo $objAprendiz->getNotafinal()."<br>";
   echo "<br>";
   echo "<h3> CONCEPTO VALORATIVO" ."<br><br>";
   echo $objAprendiz->getConceptoValorativo()."<br>";
   echo "<br>";
   echo "<br>";   
   echo "<h3> VALORACION CUALITATIVA" ."<br><br>";
   echo $objAprendiz->getValoracionCualitativa()."<br>";
   


?>