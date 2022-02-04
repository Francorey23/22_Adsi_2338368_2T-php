<HTML:5><H1>IDENTIFICAR SI UN NUMERO ES PAR O IMPAR:</H1></HTML:5>

<?php

print ("") . "<P>";
$numero = $_REQUEST["numero"];



echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
switch ($numero){
    case $numero % 2 == 0:
        echo "el numero es par";
        break;
    default:
        #code...
        break;    
}
switch ($numero){
    case $numero % 2 != 0:
        echo "el numero es impar";
        break;
    default:
        #code...
        break;    
}
 


echo "<br />";
echo "<br />";
echo "<br />";



print("<P>");
print("<P>");
echo '<a href="http://localhost/ADSI2338368%20DAYANA_EINER/z_formulario_ejercicio1.php"><input type="submit" name="btn_VOLVER" value="VOLVER"></a>';
print("<P>");
echo '<a href="http://localhost/ADSI2338368%20DAYANA_EINER/MENU.php"><input type="submit" name="btn_MENU" value="MENU"></a>';


































