<?php 

    class Torneo_de_Futbol{

    
        public $Nombre_Equipo;
        public $Integrantes;

        
        function __construct($vrNombre_Equipo, $vrIntegrantes)
        {
            $this->Nombre_Equipo = $vrNombre_Equipo;
            $this->Integrantes = $vrIntegrantes;
            
        }


        public function getestado(){
            return $this->estado;
        }
        public function setestado($vrestado){
            $this->estado = $vrestado;
        }
        public function getDatosEquipo(){
            $arraydatos = array('Nombre: ' =>$this ->Nombre_Equipo,
                                'Integrantes: ' =>$this ->Integrantes,
                               
                                
                                    
         );
         return $arraydatos;
           
        }



    }

?>