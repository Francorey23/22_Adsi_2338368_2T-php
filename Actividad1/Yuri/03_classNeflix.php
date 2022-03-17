<?php
class Netflix{
    private $Titulo;
    private $Año_Creacion;
    protected $Alquilada;
    public $fechaDevolucion;
    public $dia_alquilado;
    function __construct($vrTitulo,$vrAnioCreacion,$vrAlquilada,$vrfechaDevolucion,$vrdias)
    {
        $this->Titulo=$vrTitulo;
        $this->Año_Creacion=$vrAnioCreacion;
        $this->Alquilada=$vrAlquilada;
        $this->fechaDevolucion=$vrfechaDevolucion;
        $this->dia_alquilado=$vrdias;
    }
    function getTitulo()
    {
        return $this->Titulo;
    }
    function setTitulo($Titulo)
    {
        $this->Titulo=$Titulo;
    }
    function getAñoCreacion()
    {
        return $this->Año_Creacion;
    }
    function getAlquilada()
    {
        return $this->Alquilada;
    }
    
    Public function getPropiedades()
    {
        }
    Public function CostoAlquiler($costo)
    { 
       if ($this->dia_alquilado<=5) {
        $costo=$this->dia_alquilado*4000;
       }else{
        $costo="Usted se paso de los dias de prestamo de la pelicula su total es: $".$this->dia_alquilado*6000;
       }
       return$costo;
        
    }
}
?>