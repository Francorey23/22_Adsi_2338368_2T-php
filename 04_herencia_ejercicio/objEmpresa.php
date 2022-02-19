<?php 
    require_once("01_claseCliente.php");
    require_once("02_claseUsuario.php");
    require_once("03_claseCuentab.php");

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
    
    echo "<h2> CLASE CUENTA BANCARIA </H2>";
    $objCuenta = new Cuentabancaria(1001,"Tatiana",1200000,"tatiana@hotmail.com",123,200,"Ahorros",1000000);
    echo "Nombre del usuario: " . $objCuenta->nombre ."<br>";
    echo "Saldo: " .$objCuenta->getSaldo() ."<br>";
    echo $objCuenta->setValor_retiro(250000);
    echo "Valor a retirar: " . $objCuenta->valor_retiro ."<br>";
    echo $objCuenta->retiro(250000);


?>