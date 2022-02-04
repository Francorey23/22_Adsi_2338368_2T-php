<?php

    print("LIQUIDACION DEL EMPLEADO")."<P>";
    $nombre = $_REQUEST["nombre"];
    $cargo = $_REQUEST["cargo"];
    $horas = $_REQUEST["hora"];

    $vrhorasextra = $horas - 120;
    
    $salario_total = $horas + $vrhorasextra ;
    echo " NOMBRE: ".$nombre."<p>";
    echo " CARGO: ".$cargo."<p>";
    echo " SALARIO: ".$salario."<p>";
    print("<P>");
    
    echo " : ".$vrhorasextra."<p>";
    print("<P>");
    print("<P>");
    echo " SALARIO TOTAL: ".number_format($salario_total)."<p>";
    print("<P>");
    print("<P>");