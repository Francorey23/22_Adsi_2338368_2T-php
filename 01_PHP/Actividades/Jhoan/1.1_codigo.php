<?php
$numero = 0;

$numero = htmlspecialchars($_POST["numero"]);

if(($numero % 2) == 0){
    echo $numero . ' es par';
}else{
    echo $numero . ' es impar';
}
?>
