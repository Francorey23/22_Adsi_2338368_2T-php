<?php
 $vrnumero1 = $_REQUEST["numero1"];
 $vrnumero2 = $_REQUEST["numero12"]; 
 $opc = $_REQUEST["opc"];

 switch (true) {
     case $opc == "a";
          $suma = $vrnumero1 + $vrnumero2;
          echo "la suma de $vrnumero1 and $vrnumero2 es : $suma";
          break;
          case $opc == "b";
          $resta = $vrnumero1 - $vrnumero2;
          echo "la resta de $vrnumero1 and $vrnumero2 es : $resta";
          break;
          case $opc == "c";
          $mult = $vrnumero1 * $vrnumero2;
          echo "la multiplicacion de $vrnumero1 and $vrnumero2 es : $mult";
          break;
          case $opc == "d";
          $div = $vrnumero1 / $vrnumero2;
          echo "la division de $vrnumero1 and $vrnumero2 es : $div";
          break;
    case $opc == "e";
          $mod = $vrnumero1 % $vrnumero2;
          echo "el modo  de $vrnumero1 and $vrnumero2 es : $mod";
          break;










    















 }
 
 
 
 












?>