<HTML:5><h1>identificar si un numero es par o inpar:</h1></h1>
<?php
print ("")."<p>";
$sumero = $_REQUEST["numero"];

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

switch ($sumero){
    case $sumero % 2==0:
        echo "el numero es par";
        break;
        default:
        break;
    }
switch ($sumero){
    case $sumero % 2 != 0;
    echo "el numero es impar";
    break;
    default:
    break;

}
echo"<br/>";
echo"<br/>";
echo"<br/>";

print("<p>");


?>
