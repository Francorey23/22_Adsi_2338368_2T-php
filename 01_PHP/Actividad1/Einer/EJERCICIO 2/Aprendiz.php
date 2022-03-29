<?php 

    class Aprendiz{
        
       
            
        

        public function __construct($vrDocumento_de_identidad, $vrApellidos,$vrNombres,$vrAsignatura,$vrParcial_1,$vrParcial_2,$vrParcial_final)
        {
          
            $this->Documento = $vrDocumento_de_identidad;
            $this->Apellidos = $vrApellidos;
            $this->Nombres = $vrNombres;
            $this->Asignatura = $vrAsignatura;
            $this->Parcial_1  = ($vrParcial_1)  ;
            $this->Parcial_2  = $vrParcial_2 ;
            $this->Parcial_final  = $vrParcial_final;
            
           
         
        }

        
        public function getDatosAprendiz(){
            $arraydatos = array('Documento de identidad : ' =>$this ->Documento,
                                'Apellidos: ' =>$this ->Apellidos,
                                'Nombres: ' =>$this ->Nombres,
                                
                                
         );
         return $arraydatos;
                  
        }
            
            public function getNotadefinitiva(){
                
            $nota1=$this->Parcial_1; 
            $nota2=$this->Parcial_2; 
            $nota3=$this->Parcial_final;

            $notafinal = ($nota1+$nota2+$nota3)/3;
            echo "La  nota definitiva del aprendiz  ".$this->Nombres." ".$this->Apellidos." es : ";
                
        } 


        public function getNotafinal(){
            $nota1=$this->Parcial_1; 
            $nota2=$this->Parcial_2; 
            $nota3=$this->Parcial_final;

            $notafinal = ($nota1+$nota2+$nota3)/3;   
            echo"<h1>".number_format($notafinal, 1, ",", ".");            
        } 
       

        public function getConceptoValorativo(){
            
            if (($this->Parcial_1+$this->Parcial_2+$this->Parcial_final)/3 < 2){
                echo "la calificacion del aprendiz es MALA";
                }elseif (($this->Parcial_1+$this->Parcial_2+$this->Parcial_final)/3 >=3  and ($this->Parcial_1+$this->Parcial_2+$this->Parcial_final)/3 <4 ) {
                    echo "La calificacion del aprendiz es aceptable";
                }elseif (($this->Parcial_1+$this->Parcial_2+$this->Parcial_final)/3 >=4 and ($this->Parcial_1+$this->Parcial_2+$this->Parcial_final)/3 <4.5 ) {
                    echo "La calificacion del aprendiz es exelente";
                }
        } 

        public function getValoracionCualitativa(){
            
            if (($this->Parcial_1+$this->Parcial_2+$this->Parcial_final)/3 >= 3.5){
                echo "El aprendiz Aprobo la Competencia";
                }else {
                    echo "El aprendiz Reprobo la Competencia";
                }
        } 
       

      



    
}


?>