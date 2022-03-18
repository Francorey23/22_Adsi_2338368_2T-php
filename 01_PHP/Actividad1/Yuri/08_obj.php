<?php 

require_once("08_classEmpleado1.php"); 
require_once("08_classPersona.php"); 

$objetoempresa = new persona("juan camilo lopez",34); 

echo "nombre:".$objetoempresa->setnombre("laura lopez"); 
echo "edad" . $objetoempresa->edad;
echo "<br>"; 

$objetoempresa = new Empleado1("sara castrilon",26,1500000,"inactivo");
echo "nombre:".$objetoempresa->setestado("activo");
echo "edad" . $objetoempresa->edad;
echo "<br>"; 