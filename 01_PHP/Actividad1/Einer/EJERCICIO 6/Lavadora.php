<?php

    require_once("Electrodomestico.php");

    class Lavadora extends Electrodomestico{
        
        private $Cantidad;
        private $Precio;
        function __construct($vrMarca,$vrIva, $vrCantidad, $vrPrecio)
        {
            parent::__construct($vrMarca,$vrIva);
            $this->Cantidad =$vrCantidad;
            $this->Precio =$vrPrecio;
            $this->Iva =($vrCantidad*$vrPrecio)*$vrIva;
            
        }

        public function getInforme_venta(){
            $arrayVenta = array(
                'MARCA : '=>$this->Marca,
                'CANTIDAD : '=>$this->Cantidad,
                'VALOR UNITARIO : '=>$this->Precio,
                'PRECIO ANTES DE IVA : '=>$this->Precio*$this->Cantidad,
                'VALOR IVA : '=>$this->Iva,
                'VALOR TOTAL : '=>$this->Precio*$this->Cantidad+$this->Iva,
            );
            return $arrayVenta;
        }

        public function getLavadora2(){
            $arrayVenta = array(
                'MARCA : '=>$this->Marca,
                'CANTIDAD : '=>$this->Cantidad,
                'VALOR UNITARIO : '=>$this->Precio,
                'PRECIO ANTES DE IVA : '=>$this->Precio*$this->Cantidad,
                'VALOR IVA : '=>$this->Iva,
                'VALOR TOTAL : '=>$this->Precio*$this->Cantidad+$this->Iva,
            );
            return $arrayVenta;
        }
       
    }
    

?>