<?php

class Peluqueria{
    public $Nombre;
    private $Identificacion;
    public $Direccion;
    public $Telefono;
    public $Inicio;
    public $Cierre;
    private $Valor_corte;
    protected $Servicio;
 
    function __construct($vrNombre, $vrIdentificacion, $vrDireccion, $vrTelefono, $vrInicio, $vrCierre, $vrValor_corte, $vrServicio)
    {
        $this->Nombre=$vrNombre;
        $this->Identidicacion=$vrIdentificacion;
        $this->Direccion=$vrDireccion;
        $this->Telefono=$vrTelefono;
        $this->Inicio=$vrInicio;
        $this->Cierre=$vrCierre;
        $this->Valorcorte=15000;
        $this->Servicio=$vrServicio;
    }
    function getIdentificacion()
    {
        return $this->identificacion;
    }
    function getServicio()
    {
        return $this -> Servicio;
    }function setServicio($Servicio)
    {
        $this->Servicio=$Servicio;
    }
    function getValorCorte()
    {
        return $this-> Valor_corte;
    }function setValorcorte($Valor_corte)
    {
        $this->Valor_corte=$Valor_corte;
    }

    public function Cita()
    {
        $arrayCita= array (

            'Servicio: '=>$this->Servicio,
            'Valor de corte: '=>$this->Valor_corte,
        );
    }
   
}
?>