<?php 
    require_once("Persona.php");

    class Empleado extends Persona {
        
        public $sueldo;
        

        public function __construct($vrnombre, $vredad, $vrsueldo)
        {  
            parent::__construct($vrnombre, $vredad);    
            
            
            $this->sueldo = $vrsueldo;
           
        }

        public function getestado(){
            return $this->estado;
        }
        public function setestado($vrestado){
            $this->estado = $vrestado;
        }

        public function getDatosEmpleado(){
            $arraydatos = array('sueldo: ' =>$this ->nombre,
                                'edad: ' =>$this ->edad,
                                'nombre: ' =>$this ->sueldo,
                                
                                
                                    
         );
         return $arraydatos;
           
        }
    



    }

?>