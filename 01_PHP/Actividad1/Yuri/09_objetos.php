<?php 

require_once("09_classPartidos.php");
require_once("09_clasTorneoFutbol.php"); 

$objtpartido = new Torneo("club la rivera",25); 
echo $objtpartido->nombreEquipo; 
echo $objtpartido->numeroIntegrantes; 
echo "<br>"; 

$objtpartido = new Partidos("aguilas",28,12,"asenso"); 
echo $objtpartido->Partidosganados; 
echo $objtpartido->estado;



?>