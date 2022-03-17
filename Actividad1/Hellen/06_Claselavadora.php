<?php
require_once("06_claseElectrodomestico.php");

class Lavadora extends Electrodomestico{
        private $Cantidad;
        protected $Precio;
    
        public function __construct($vrMarca, $vrCantidad, $vrPrecio)
        {
            $this->Cantidad=$vrCantidad;
            $this->Precio=$vrPrecio;
            
        }
        public function setCantidad(){
            return $this->Cantidad;
        }
        public function getPrecio(){
            return $this->Precio;
        }
    
}
   
?>