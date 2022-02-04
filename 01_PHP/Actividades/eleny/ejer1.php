<?php

$vrnum = $_REQUEST["num"];

if ($vrnum%2==0) {
    echo "El numero ". $vrnum. " es par";
}
else{
    echo "El numero ". $vrnum. " es impar";
}
?>