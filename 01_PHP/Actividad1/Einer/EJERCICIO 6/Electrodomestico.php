<?php

    class Electrodomestico{
        public $Marca;
        private $Iva= 0.19;

        function __construct($vrMarca)
        {
            $this->Marca = $vrMarca;
            $this->Iva = 0.19;
      

        }

        public function getIva(){
            return $this->Iva;
        }
        public function setIva($vrIva){
            $this->Iva = $vrIva;
        }

        public function getDatos(){
            $arrayElectrodomestico = array(
                'MARCA : '=>$this->Marca,
                
            );
            return $arrayElectrodomestico;
        }

    }
?>