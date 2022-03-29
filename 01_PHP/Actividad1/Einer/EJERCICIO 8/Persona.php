<?php 

    class Persona{

    
        public $nombre;
        protected $edad;

        
        function __construct(string $vrnombre, $vredad )
        {
            $this->nombre = $vrnombre;
            $this->edad = $vredad;
        }

        public function getDatosEmpleado(){
            $arraydatos = array('nombre: ' =>$this ->nombre,
                                'edad: ' =>$this ->edad,
                                
                                    
         );
         return $arraydatos;
           
        }



    }

?>