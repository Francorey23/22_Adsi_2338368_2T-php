<?php
 
 require_once("05_clasePersona.php");

 class Contador extends Persona{
     
    protected $Dias_laborados;

    public function __construct($vrNombre, $vrEdad, $vrSueldo, $vrDias_laborados)
    {
        $this->Dias_laborados=$vrDias_laborados;
        $this->Sueldo= 5500000;
    }

    function getDiaslaborados()
    {
        $Diaslaborados=$this->Sueldo* $this->Dias_laborados;
        return $Dias_laborados;
    }
    
    function getSueldo()
    {
        return $this->Sueldo;
    }
   
    
 }


?>