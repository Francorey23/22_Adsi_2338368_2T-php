<?php


$num1= $_REQUEST["num1"];
$num2= $_REQUEST["num2"];

$operacion=$_REQUEST['operacion'];

$suma=$num1 + $num2;
$resta=$num1 - $num2;
$division=$num1 % $num2;
$multiplicacion=$num1 * $num2;

switch ('true'){
    case 1: $operacion=="1"
    $suma = $num1+$num2;
    echo "el resultado de la suma $num1 y $num2 es: $suma";
    break;
    case 2: $operacion=="2"
    $resta = $num1-$num2;
    echo "el resultado de la resta es";
    


 
}
?>