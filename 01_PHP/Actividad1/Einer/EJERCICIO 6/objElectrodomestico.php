<?php

    require_once("Electrodomestico.php");
    require_once("Lavadora.php");
    
    echo "<H1>LAVADORA 1";
    $obj_Electrodomestico = new Lavadora("LG", 0.19,5,1350000);

    print_r('<pre>');
    print_r($obj_Electrodomestico->getInforme_Venta());
    print_r('<pre>');


    echo "<H3>LAVADORA 2";
    $obj_Electrodomestico = new Lavadora("WIRPOOL", 0.19,8,1150000 );

    print_r('<pre>');
    print_r($obj_Electrodomestico->getLavadora2());
    print_r('<pre>');

   
?>