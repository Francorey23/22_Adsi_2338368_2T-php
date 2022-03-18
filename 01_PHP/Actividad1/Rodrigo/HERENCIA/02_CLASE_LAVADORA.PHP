<?php
  require_once ("02_CLASE_ELECTRODOMESTICOS.PHP");

  class lavadora extends electrodomestico{

    public $cantidad;
    public $precio;

    function __construct($vrmarca, $vrcantidad, $vrprecio)
    {
        parent::__construct($vrmarca, $vrcantidad, $vrprecio);
        $this->marca=$vrmarca;
        $this->cantidad=$vrcantidad;
        $this->precio=$vrprecio;

    }

    public function getmarca(){
        return $this->marca;
    }

    public function getcantidad(){
        return $this->cantidad;
    }

    public function getprecio(){
        return $this->precio;
    }

    function getventa($venta){
        
        $this->$venta=(($this->getcantidad()*0.19)+$this->getcantidad())*$this->precio;
        return $this->$venta;

    
    }


  }







?>