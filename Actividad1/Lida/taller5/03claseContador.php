<?php
 require_once("02claseEmpleado.php");


 class Contador extends Persona{
     private $diaslaborados;

    function __construct(string $vrnombre,$vredad,$vrsueldo,$vrdiaslaborados)
    {
        parent::__construct($vrnombre,$vredad,$vrsueldo);
        $this->diaslaborados=$vrdiaslaborados;
        $this->sueldo=$vrsueldo;
    }
    function getdiaslaborados()
    {
        return $this->diaslaborados;
    }

    function diastrabajados()
    {
        $diastrabajados=$this->sueldo*$this->diaslaborados;
        return $diastrabajados;
    }
    function getsueldo(){
        return$this->sueldo;
    }
 }


?>