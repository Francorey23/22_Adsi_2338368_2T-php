<?php
 require_once("01_clasePersona.php");

 class contador extends persona{
     private $diaslaborados;

    function __construct(string $vrnombre,$vredad,$vrsueldo,$vrdiaslaborados)
    {
        Parent::__construct($vrnombre,$vredad,$vrsueldo);
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
    
    
    
    function getsueldo()
    {
        return $this->sueldo;
    }
   
    
 }


?>