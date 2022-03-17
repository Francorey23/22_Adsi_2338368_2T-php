<?php
class Aprendiz {
    
    public $nombres;
    public $apellidos;
    Private $asignatura;
    public $primer_parcial;
    public $segundo_parcial;
    Protected $documento_identidad;
    static $examen_final;

    public function __construct($vrnombres, $vrapellidos, $vrasignatura, $vrprimer_parcial, $vrsegundo_parcial, $vrdocumento_identidad){
        
        $this->nombres = $vrnombres;
        $this->apellidos = $vrapellidos;
        $this->asignatura = $vrasignatura;
        $this->primer_parcial = 30;
        $this->segundo_parcial = 30;
        $this->documento_identidad = $vrdocumento_identidad;
        Aprendiz::$examen_final = $vrexamen_final;

    }
    public function getAprendiz(){
        $arrayAprendiz = Array('Nombres: ' => $this->nombres,
                               'Apellidos: ' => $this->apellidos,
                               'Asignatura: ' => $this->asignatura,
                               'Primer Parcial: ' => $this->primer_parcial,
                               'Segundo Parcial: ' => $this->segundo_parcial,
                               'Documento de Identidad: ' => $this->documento_identidad,
                               'Examen Final: ' => Aprendiz::$examen_final,

    );
    return $arrayAprendiz;
}    
}
?>