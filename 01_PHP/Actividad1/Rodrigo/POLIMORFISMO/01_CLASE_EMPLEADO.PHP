<?php
require_once("01_CLASE_PERSONA.PHP");

class Empleados extends persona{

    public $sueldo;
    public $estado;


    public function __construct($vrnombre, $vredad,$vrsueldo, $vrestado)
    {
        parent::__construct($vrnombre, $vredad, $vrsueldo, $vrestado);
        $this->sueldo=$vrsueldo;
        $this->estado=$vrestado;
    }

    public function getestado(){
        return $this->estado;
    }
    public function setestado($vrestado){
        $this->estado=$vrestado;
    }




}

?>