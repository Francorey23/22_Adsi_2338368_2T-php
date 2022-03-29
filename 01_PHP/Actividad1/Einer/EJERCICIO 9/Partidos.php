<?php 
    require_once("Torneo_de_Futbol.php");

    class Partidos extends Torneo_de_Futbol {
        
        public $Partidos_Ganados;

        public function __construct($vrNombre_Equipo, $vrIntegrantes,$vrPartidos_Ganados)
        {  
            parent::__construct($vrNombre_Equipo, $vrIntegrantes);    
            
            
            $this->Partidos_Ganados = $vrPartidos_Ganados;
            if ($this->Partidos_Ganados >= 5) {
                $this->estado ="ASCENSO";
            }
            elseif ($this->Partidos_Ganados < 5) {
                $this->estado ="DESCENSO";
            }
        }

        public function getestado(){
            return $this->estado;
        }
        public function setestado($vrestado){
            $this->estado = $vrestado;
        }

        public function getDatosEquipo(){
            $arraydatos = array('Nombre del Equipo: ' =>$this ->Nombre_Equipo,
                                'Integrantes: ' =>$this ->Integrantes,
                                'Partidos Ganados: ' =>$this ->Partidos_Ganados,
                                
                                
                                    
         );
         return $arraydatos;
           
        }
    



    }

?>