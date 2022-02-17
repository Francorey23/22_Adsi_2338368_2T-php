<?php 
    require_once("01_claseCliente.php");
    require_once("02_claseUsuario.php");

    $objCliente = new Cliente(30713456, "Ana Garcia", 2300000);

    echo "Nombre del cliente: ". $objCliente->nombre. "<br>";
    echo "Salario: " . $objCliente->getSalario() ."<br>";
    $objCliente->setSalario(2400000);
    echo "Salario: " . $objCliente->getSalario() ."<br>";

    $objUsuario = new Usuario(10000,"Carlos Trejos", 1300000, "carlos@hotmail.com", 123456);
    echo "<h2> CLASE USUARIO </H2>";
    echo "Nombre del usuario: " . $objUsuario->nombre ."<br>";
    echo "Salario: " . $objUsuario->getSalario() ."<br>";
    echo "Email: " . $objUsuario->getEmail();



?>