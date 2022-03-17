<?php

class Persona{
    public $Nombre;
    private $Edad;


    function  __construct($vrNombre, $vrEdad)
    {
        $this->Nombre=$vrNombre;
        $this->Edad=$vrEdad;
    }

    function getNombre()
    {
        return $this->Nombre;
    }
    function setEdad()
    {
        return $this->Edad;
    }
}
?>