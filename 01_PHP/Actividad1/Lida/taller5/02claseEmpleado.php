<?php
require_once("01clasePersona.php");

class Empleado extends Persona{
 public $sueldo;

 public function  __construct( $vrnombre,$vredad,$vrsueldo)
 {
     parent::__construct($vrnombre,$vredad);
     $this->sueldo=$vrsueldo;
 }
 public function getsueldo()
 {
     return$this->sueldo;
 }
}



?>

?>