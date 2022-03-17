<?php
class Empleado {
    
    public $nombre;
    Private $celular;
    public $cargo;
    Protected $sueldo;
    static $auxilio_t;

    public function __construct($vrnombre, $vrcelular, $vrcargo, $vrsueldo){
        
        $this->nombre = $vrnombre;
        $this->celular = $vrcelular;
        $this->cargo = $vrcargo;
        $this->sueldo = 980000;
        Empleado::$auxilio_t = $vrauxilio_t;

    }
    public function getDatosEmpleado(){
        $arrayEmpleado = Array('Nombre: ' => $this->nombre,
                               'Celular: ' => $this->celular,
                               'Cargo: ' => $this->cargo,
                               'Sueldo: ' => $this->sueldo,
                               'Auxilio_t: ' => Empleado::$auxilio_t,

    );
    return $arrayEmpleado;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($vrnombre){
        $this->nombre = $vrnombre;
    }
    public function getCelular(){
    return $this->celular;
}
public function setCelular($vrcelular){
    $this->celular = $vrcelular;
}
}
?>