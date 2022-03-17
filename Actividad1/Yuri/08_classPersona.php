<?php
class Persona {
    private $nombre;
    public $edad;

    function __construct($vrnombre,$vredad)
    {
        $this->Nombre=$vrnombre;
        $this->edada=$vredad;
    }
    public function getNombre(){
        return$this->nombre;
    }public function setNombre($nombre){
        return$this->nombre=$nombre;
    }
}
?>