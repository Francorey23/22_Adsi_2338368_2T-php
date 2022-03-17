<?php
require_once("01_clasePersona.php");


class empleado extends Persona{
 private $sueldo;

 public function  __construct(string $vrnombre,$vredad,$vrsueldo)
 {
     Parent::__construct($vrnombre,$vredad);
     $this->sueldo=$vrsueldo;
 }
 public function getsueldo()
 {
     return$this->sueldo;
 }
}



?>