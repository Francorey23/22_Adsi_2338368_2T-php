<?php

class aprendiz {

    public $documento_identidad;
    public $nombre;
    public $apellido;
    public $asignatura;
    public $primer_parcial ;
    public $segundo_parcial;
    public $examen_final;

function __construct($vrdocumento_identidad, $vrnombre, $vrapellido, $vrasignatura, $vrprimer_parcial, $vrsegundo_parcial, $vrexamen_final)
{   $this->documento_identidad=$vrdocumento_identidad;
    $this->nombre=$vrnombre;
    $this->apellido=$vrapellido;
    $this->asignatura=$vrasignatura;
    $this->primer_parcial=$vrprimer_parcial;
    $this->segundo_parcial=$vrsegundo_parcial;
    $this->examen_final=$vrexamen_final;
}
public function getaprendiz(){
    $arrayaprendiz  = array (
       'Documento_identidad: ' =>$this ->documento_identidad,
       'nombre: ' =>$this ->nombre,
       'apellido: ' =>$this ->apellido,
       'asignatura: '=>$this ->asignatura,
        'primer_parcial: ' =>$this ->primer_parcial,
        'segundo_parcial: ' =>$this ->segundo_parcial,
        'examen_final: ' =>$this ->examen_final,
    );
     return $arrayaprendiz;
    }   
    
    public function getDefinitiva(){
        $this->Definitiva=($this->primer_parcial*0.3)+($this->segundo_parcial*0.3)+($this->examen_final*0.4);
        return $this->Definitiva;

    }

    public function getConceptovalorativo(){
       if ($this->Definitiva<2) {
             $this->Definitiva="Mala";
       }

       elseif ($this->Definitiva >=3 or $this->Definitiva<4) {
            $this->Definitiva="Aceptable";
       }
       elseif ($this->Definitiva >=4 or $this->Definitiva<4.5) {
            $this->Definitiva="excelente";
       }
       return $this->Definitiva;
        
        
    }

    public function getvaloracionCualitativa(){
        if($this->getDefinitiva() <3.5 ){
            $this->Definitiva="Reprobo";
        }
        elseif ($this->getDefinitiva()>3.5) {
            $this->Definitiva="Aprobo";
        }
        return $this->Definitiva;

    }
    

}













?>