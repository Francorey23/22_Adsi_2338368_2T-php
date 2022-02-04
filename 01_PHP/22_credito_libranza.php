<?php 
   
   $vrdocumento = 1023456789;
   $vrnombre = "Carlos";
   $vrcredito = 6000000;
   $vrduracion = 24;
   $vrporcentaje = 2.5;

    $vrcreditomes = $vrcredito/$vrduracion;
    $vrporcentajemes = $vrporcentaje/$vrduracion;
   //procedimiento
   if ($vrcredito > 5000000) {
       
    $vrcreditototalmes = $vrcreditomes* $vrporcentajemes;
    echo "La couta del crédito mensual es: ". $vrcreditomes;
    echo "<br>";
    echo "el interes a cancelar es: " . round($vrcreditototalmes,2);
    echo "<br>";
    echo "el total a pagar por mes es: ". round($vrcreditomes = $vrcreditomes + $vrcreditototalmes, 2);

   }

?>

