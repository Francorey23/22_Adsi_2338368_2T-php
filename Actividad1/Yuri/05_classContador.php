<?php
 require_once("05_classPersona.php");

 class contador extends persona{
     private $diaslaborados;
     public $sueldo;
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
    
    
    
    function getsueldo()
    {
        return $this->sueldo;
    }
   
    
 }


?>