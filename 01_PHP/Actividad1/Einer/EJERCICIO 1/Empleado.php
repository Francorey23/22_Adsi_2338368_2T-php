<?php 

    class Empleado{
        
        private $Nombre;
        protected $Celular;
        public $Cargo;
        public $sueldo;
        public $subsidio;
        

        public function __construct($vrNombre, $vrCelular,$vrCargo,$vrSueldo,$vrsubsidio)
        {
          
            $this->Nombre = $vrNombre;
            $this->Celular = $vrCelular;
            $this->Cargo  = $vrCargo;
            $this->sueldo  = $vrSueldo;
            $this->total  = number_format($vrSueldo + $vrsubsidio, -2, ",", ".");
            $this->subsidio  = number_format($vrsubsidio, -2, ",", ".");
         
        }
       
       
        
        public function getnombre(){
            return $this->Nombre;
        }    
        public function setCelular($vrCelular){
            $this->Celular = $vrCelular;
        }
        

        public function getDatosEmpleado(){
            $arraydatos = array('Cargo: ' =>$this ->Cargo,
                                
         );
         return $arraydatos;
                  
        }
        public function getImpuesto(){
            
            if ($this->sueldo >= 3750000){
                $Impuesto = $this->sueldo*0.09;
                    echo "debe pagar el valor de  $".number_format($Impuesto, -2, ",", ".")."  por concepto del impuesto de retencion en la fuente";
                }else {
                    echo "No paga Retencion en la Fuente. ";
                }
        } 
       
    
       

      



    
}


?>