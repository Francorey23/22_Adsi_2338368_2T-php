<?php 
    //require llama al nombre del archivo para ser cargado en memoria RAM
    require_once("01_clasePersona.php");
    require_once("02_claseCliente.php");
    require_once("03_claseEmpleado.php");

    $objPersona = new Persona(100201100,"Juan Perez", 21);
    echo "Cedula: " . $objPersona->getCedula()."<br>";
    $objPersona->setCedula(20001001);
    echo "Cambio de cedula: " . $objPersona->getCedula()."<br>";
    
    echo "<h2>DATOS DE LA CLASE CLIENTE</h2>";
    $objCliente = new Cliente(30713456, "Ana Maria Reyes", "anareyes@hotmail.com",28);
    echo "Cedula cliente: " . $objCliente->getCedula()."<br>";
    $objCliente2 = new Cliente(27304560,"Juan Diego Pelaez","juandiego@hotmail.com",32);
    echo "Cedula cliente: " . $objCliente2->getCedula()."<br>";
    echo "Edad cliente: " . $objCliente2->nombre."<br>";

    echo "<h2>DATOS DE LA CLASE EMPLEADO</h2>";
    $objEmpleado = new Empleado(50010234, "Jimena Cortez", 35, 3500000, "Contador");
    echo "Nombre del empleado: " . $objEmpleado->nombre."<br>";
    echo "Cedula: " . $objEmpleado->getCedula()."<br>";
    echo "Credito: " . $objEmpleado->getCredito();


?>