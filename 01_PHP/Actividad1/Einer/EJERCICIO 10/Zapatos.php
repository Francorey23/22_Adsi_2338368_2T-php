<?php 

    class Zapatos{

    
        public $Talla;
        public $Marca;
        public $Stock;


        
        function __construct($vrTalla, $vrMarca, $vrStock)
        {
            $this->Talla = $vrTalla;
            $this->Marca = $vrMarca;
            $this->Stock = $vrStock;
            
        }


       
        public function getInventario(){
            $arraydatos = array('Talla: ' =>$this ->Talla,
                                'Marca: ' =>$this ->Marca,
                                'Stock: ' =>$this ->Stock,
                               
                                
                                    
         );
         return $arraydatos;
           
        }



    }

?>