<?php
$vrnum1 = $_REQUEST["num1"];
$vrnum2 = $_REQUEST["num2"];
$opc = $_REQUEST["opc"];

switch (true) {
    case $opc=="a";
        $suma = $vrnum1 + $vrnum2;
        echo "La suma de $vrnum1 y $vrnum2  es: $suma";
        break;
    case $opc=="b";
        $resta = $vrnum1 - $vrnum2;
        echo "La resta de  $vrnum1 y $vrnum2 es: $resta";
        break;
    case $opc=="c";
        $mul = $vrnum1 * $vrnum2;
        echo "La multiplicaion de  $vrnum1 y $vrnum2 es: $mul";
        break;
    case $opc=="d";
        $div = $vrnum1 / $vrnum2;
        echo "La divicion  $vrnum1 y $vrnum2 es: $div";
        break;
    case $opc=="e";
        $mod = $vrnum1 % $vrnum2;
        echo "El modo de  $vrnum1 y $vrnum2 es: $mod";
        break;
}

?>