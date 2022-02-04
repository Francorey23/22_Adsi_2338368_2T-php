<?php

$triangulo=$_REQUEST["triangulo"];
$cuadrado=$_REQUEST["cuadrado"];
$rectangulo=$_REQUEST["rectangulo"];
$circulo=$_REQUEST["circulo"];

$base=$_REQUEST["base"];
$altura=$_REQUEST["altura"];
$perimetro=$_REQUEST["perimetro"];
$radio=$_REQUEST["radio"];

$triangulo=($base*$altura)/2; 
    echo "El area de un triangulo es: $triangulo"; 

    
$rectangulo=($base*$altura);
    echo "El area de un Rectangulo es: $rectangulo";

$circulo=($permietro*$radio);
    echo "el area de circulo es: $circulo;"


    







    

?>