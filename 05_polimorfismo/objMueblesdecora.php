<?php 
    require_once("01_claseProducto.php");
    require_once("02_claseMueble.php");

    //Crear un objeto o instancia
   $objProducto = new Producto("Escritorio 1.20 m",430000,"Disponible");

    echo "<h2> Datos de clase Producto </h2>";
    echo "Valor del producto: " .$objProducto->getPrecio()."<br>";
    
    $objProducto-> getInfoproductos();
    print_r('<pre>');
    print_r($objProducto);
    print_r('</pre>');
    echo Producto::$estado;

    echo "<br>";
    echo "<h2> Datos de clase Mueble </h2>";
    $objMueble = new Mueble("Mesa",3000000,"cafe","cedro");
    print_r('<pre>');
    print_r($objMueble);
    print_r('</pre>');



?>