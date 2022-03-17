<?php

require_once("05_Clasepersona.php");
require_once("05_Claseempleado.php");
require_once("05_Clasecontador.php");

echo "<h2> Clase Persona: </h2>";
$ObjPersona= new Persona("Jhon Jairo", 60);
echo "<br> Nombre: ".$Objpersona->getNombre();
echo "<br> Edad: ".$Objpersona->setEdad(). "<br>";

print_r('<pre>');
print_r($ObjPersona);
print_r('</pre>');

echo "<h2> Clase Empleado: </h2>";
$ObjEmpleado= new Empleado("Henry Alberto", 33, 980000);
echo "<br> Nombre: ".$Objempleado->getNombre();
echo "<br> Edad: ".$Objempleado->setEdad();
echo "<br> Sueldo: ".$Objempleado->getSueldo(). "<br>";

print_r('<pre>');
print_r($ObjEmpleado);
print_r('</pre>');

echo "<h2> Clase Contador: </h2>";
$ObjContador=new Contador("Jose Benito", 56, 5500000, 10);
echo "<br> Nombre: ".$ObjContador->getNombre();
echo "<br> Edad: ".$ObjContador->setEdad();
echo "<br> Sueldo: ".$ObjContador->getSueldo();
echo "<br> Dias laborados: ".$ObjContador->Diaslaborados(). "<br>";

print_r('<pre>');
print_r($ObjContador);
print_r('</pre>');

?>