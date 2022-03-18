<?php
require_once("05_Clasepersona.php");

class Empleado extends Persona{

 private $Sueldo;

 public function  __construct($vrNombre, $vrEdad, $vrSueldo)
 {
    
     $this->Sueldo= 980000;
 }
 public function getSueldo()
 {
     return $this->Sueldo;
 }
}



?>