<?php 

    class Empleado{

        public $Nombre;
        public $Celular;
        protected $Cargo;
        private $sueldo;
        static $Auxilio_de_transporte = "5%";


        //metodo constructor  int solo indica recibir enteros
        //string recibir cadenas de caracteres
        public function __construct($vrNombre, $vrCelular,$vrCargo,$vrSueldo)
        {
            $this->Nombre = $vrNombre;
            $this->Celular = $vrCelular;
            $this->Cargo  = $vrCargo;
            $this->Sueldo  = $vrSueldo;

            //producto::$estado = $vrestado;
            
        }

        
        public function getnombre(){
            return $this->Nombre;
        }    
        public function setCelular($vrCelular){
            $this->Celular = $vrCelular;
        }
        

        public function getDatosEmpleado(){
            $arraydatos = array('Cargo: ' =>$this ->Cargo,
                                'Sueldo: ' =>$this ->Sueldo,
                                    
         );
         return $arraydatos;
           
        }


       

      



    }//end clase

?>