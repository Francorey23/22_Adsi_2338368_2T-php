<?php

class Netflix {

public $nombre;
public $año;
public $disponibilidad;
public $Fecha_devolucion;
public $dias;

function __construct($vrnombre, $vraño, $vrdisponibilidad, $vrfecha_devolucion, $vrdias)
{
    $this->nombre=$vrnombre;
    $this->año=$vraño;
    $this->disponibilidad=$vrdisponibilidad;
    $this->Fecha_devolucion=$vrfecha_devolucion;
    $this->dias=$vrdias;
}

public function getNetflix(){
    $arrayNetflix  = array (
       'nombre: ' =>$this ->nombre,
       'año: '=>$this ->año,
        'Disponibilidad: ' =>$this ->disponibilidad,
        'fecha devolucion: '=>$this ->Fecha_devolucion,
        'dias: ' =>$this ->dias,
    );
     return $arrayNetflix;
    }   
public function getnombre(){
    return $this->nombre;
}
public function getaño(){
    return $this->año;
}public function getdisponibilidad(){
    return $this->disponibilidad;
}public function getfecha_devolucion(){
    return $this->Fecha_devolucion;
}

public function CostoAlquiler(){
    if ($this->dias<=5) {
        $this->dias=$this->dias*4000;
    }
    return $this->dias;
}


}




?>