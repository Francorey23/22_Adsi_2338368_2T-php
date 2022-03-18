<?php 

class Neflix{

    public $titulo;
    private $ano_creacion; 
    protected $alquilada; 
    static $fecha_devolucion;
    
    public function __construct( $vrtitulo, $vrano_creacion, $vralquilada){
     $this->titulo = $vrtitulo;
     $this->ano_creacion = $vrano_creacion;
     $this->alquilada = $vralquilada;
     Neflix::$fecha_devolucion = $vrfecha_devolucion;
    } 

public function getNeflix(){
    $arrayNeflix = Array('Titulo: ' => $this->titulo,
                         'Ano_creacion: ' => $this->ano_creacion,
                         'Alquilada: ' => $this->alquilada,
                         'fecha_devolucion: ' => Neflix::$fecha_devolucion,

);
return $arrayNeflix;
}
public function getAlquilada(){
    return $this->alquilada;
}
public function setAlquilada($vrnombre){
    $this->alquilada = $vralquilada;
}
public function getCelular(){
return $this->celular;
}
public function setCelular($vrcelular){
$this->celular = $vrcelular;
}
}
?>