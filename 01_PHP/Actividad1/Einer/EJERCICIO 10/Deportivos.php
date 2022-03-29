<?php 
    require_once("Zapatos.php");

    class Deportivos extends Zapatos {
        
        public $Descripcion;
        public $Precio;
        public $Cantidad;

        public function __construct($vrTalla, $vrMarca, $vrStock,$vrDescripcion, $vrPrecio, $vrCantidad)
        {  
            parent::__construct($vrTalla, $vrMarca, $vrStock);    
            
            
            $this->Descripcion = $vrDescripcion;
            $this->Precio = $vrPrecio;
            $this->Cantidad = $vrCantidad;


            if ($this->Cantidad > $this->Stock) {
                echo "NO SE PUEDE REALIZAR LA VENTA";
            }
           
        }

    

        public function getDatosEquipo(){
            $arraydatos = array('Talla: ' =>$this ->Talla,
                                'Marca: ' =>$this ->Marca,
                                'Descripcion: ' =>$this ->Descripcion,
                                
                                
                                    
         );
         return $arraydatos;
           
        }
    



    }

?>