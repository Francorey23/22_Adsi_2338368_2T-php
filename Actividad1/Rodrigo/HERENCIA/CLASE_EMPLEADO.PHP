<?php

require_once("01_CLASE_PERSONA.PHP");

class Empleados extends persona{

    public $valor_hora;

    public function __construct($vrnombre, $vredad,$vrvalor_hora)
    {
        parent::__construct($vrnombre, $vredad);
        $this->valor_hora=$vrvalor_hora;
    }

    public function getvalor_hora(){
        return $this->valor_hora;
    }




}










?>