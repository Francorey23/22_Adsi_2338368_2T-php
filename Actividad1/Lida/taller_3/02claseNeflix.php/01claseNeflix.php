<?php
class Neflix{
public $titulo;
private $año_creacion;
public $pelicula;
protected $dia_alquiler;
public $fecha_evolucion;

function __construct($vrtitulo,$vrano_creacion,$vrpelicula,$vrdia_alquiler,$vrfecha_evolucion)
{
    $this->titulo=$vrtitulo;
    $this->año_creacion=$vrano_creacion;
    $this->pelicula=$vrpelicula;
    $this->dia_alquiler=$vrdia_alquiler;
    $this->fecha_evlucion=$vrfecha_evolucion;
    
}
function gettitulo()
{
    return $this->titulo;
} 
function settitulo($titulo)
{
    $this->titulo=$titulo;
}    
function getano_creacion()
{
    return $this->año_creacion;
}    
function getdia_alquiler()
{
    return $this->dia_alquiler;
}    
public function getpropiedades()
{
    $arraypropiedades = array(
        'nombre de la pelicula: '=>$this->titulo,
        'año de la creacion: '=>$this->año_creacion,
        'disponible para alquiler: '=>$this->dia_alquiler,
        'tiempo de evolucion: '=>$this->fecha_evolucion,
    );
    return $arraypropiedades;

    }
    public function costoalquiler($costo)
    { 
        if ($this->dia_alquiler<=5){
            $this->$costo=$this->dia_alquiler*4000;
        }else{
            $this->$costo="usted se paso de dias de prestamo el total es".$this->dia_alquiler*9000;
        }
        return  $this->$costo;
    }  

}     
?>