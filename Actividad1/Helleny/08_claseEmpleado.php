<?php
require_once("08_clasePersona.php");

class Empleado extends Persona{
    protected $sueldo;
    private $estado;

    function __construct($vrnombre,$vredad,$vrsueldo,$vrestado)
    {
        parent::__construct($vrnombre,$vredad);
        $this->sueldo=$vrsueldo;
        $this->estado="activo";
    }  
    public function getestado(){
        return $this->estado;
    }public function setestado($vrestado){
        return $this->estado=$vrestado;
    }
    function getPersona(){
        $arrayPersona = array(
            'Nombre: '=>$this->getnombre(),
            'Edad: '=>$this->edad,
            'Sueldo: '=>$this->sueldo,
            'estado: '=>"Inactivo",
        );
        return $arrayPersona;
    }
}


?>