<?php
    require_once("01_ClaseAuto.php");

    $objVehiculo = new Vehiculo("MCN-930","MAZDA",2020, 45500,70,30);
    $objVehiculo->getVehiculo();
     print_r('<pre>');
    print_r($objVehiculo);
    print_r('</pre>');

    echo "<br>";
    echo $objVehiculo->getMarca();
    echo "<br>";
    $objVehiculo->setMarca("FORD");
    echo $objVehiculo->getMarca();
    echo "<br>";
    echo $objVehiculo->modelo;
    echo "<br>";
    echo "La distancia recorrida es: " . $objVehiculo->calculo_distancia();
    echo "<br>";
    echo $objVehiculo->getPlaca();
    echo "<br>";
    $objVehiculo->setPlaca("GTY-900");
    echo "La placa actualiza es: " . $objVehiculo->getPlaca();
    echo "<br>";




?>