<?php


class Aprendiz{

        protected $nombres;
        protected $apellidos;
        private $documento_id;
        public $asignatura;
        public $primer_Parcial;
        public $segundo_Parcial;
        public $examen_final;
       


        function  __construct( $vrnombres,$vrapellidos,$vrdocumento,$vrasignatura,$vrprimer_parcial, $vrsegundo_parcial,$vrexamen_final)
        {
            $this->nombres=$vrnombres;
            $this->apellidos=$vrapellidos;
            $this->documento_id=$vrdocumento;
            $this->asignatura=$vrasignatura;
            $this->primer_Parcial=$vrprimer_parcial;
            $this->segundo_Parcial=$vrsegundo_parcial;
            $this->examen_final=$vrexamen_final;
            
        }

        public function getnombre()
        {
            return $this->nombres;
        }
        public function getapellido()
        {
            return $this->apellidos;
        }
        public function getdocumento()
        {
            return $this->documento_id;
        }

        public function definitiva()
        {
            $this->definitiva=(($this->primer_Parcial*0.3)+($this->segundo_Parcial*0.3)+($this->examen_final*0.4));
            return $this->definitiva;
        }
        public function getConceptoValorativo()
        { 
            
            if ($this->definitiva<2) {
              $this->definitiva="Malo <br>"; 
            }elseif ($this->definitiva=3 or $this->definitiva<4) {
                $this->definitiva="Aceptable <br>";
            }elseif ($this->definitiva>=4 or $this->definitiva<4.5) {
                $this->definitiva="Excelente <br>";
            }
            return $this->definitiva;
        }

        public function ValorCualitativa()
        {
            if ($this->definitiva()<3.5) {
            $this->definitiva="El aprendiz reprobo la competencia <br>";
            
            }elseif ($this->definitiva() >=3.5) {
                $this->definitiva="El aprendiz aprobo la competencia";
            }
            return $this->definitiva;
            
        }

       
}


?>