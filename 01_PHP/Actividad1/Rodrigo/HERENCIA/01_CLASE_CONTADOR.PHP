<?php

require_once("01_CLASE_PERSONA.PHP");

class contador extends Empleados{

public $dias_laborados;

function __construct($vrnombre, $vredad,$vrvalor_hora, $vrdias_laborados)
{
    parent::__construct($vrnombre, $vredad,$vrvalor_hora, $vrdias_laborados);
    $this->nombre=$vrnombre;
    $this->edad=$vredad;
    $this->valor_hora=$vrvalor_hora;
    $this->dias_laborados=$vrdias_laborados;


}
public function getdias_trabajados(){
    $dias_trabajados=$this->valor_hora*$this->dias_laborados;
    return $dias_trabajados;
}


}












?>