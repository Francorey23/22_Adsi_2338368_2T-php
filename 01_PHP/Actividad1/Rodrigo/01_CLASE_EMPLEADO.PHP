<?php

class empleado{

    public $nombre;
    private $celular;
    public $cargo;
    protected $sueldo;
    static  $aux_transporte;

function __construct($vrnombre, $vrcelular, $vrcargo, $vrsueldo, $vraux_transporte)
{
    $this->nombre=$vrnombre;
    $this->celular=$vrcelular;
    $this->cargo=$vrcargo;
    $this->sueldo=$vrsueldo;
    empleado:: $aux_transporte = $vraux_transporte;
}

    public function getempleado(){
    $arrayempleado  = array (
       'nombre: ' =>$this ->nombre,
       'celular: ' =>$this ->celular,
       'cargo: ' =>$this ->cargo,
       'sueldo: '=>$this ->sueldo,
       'aux_transporte: '=>empleado::$aux_transporte,
    
    );
    return $arrayempleado;
    }
    public function getnombre(){
        return $this-> nombre;
    }
    public function getcelular(){
        return $this-> celular;
    }
    public function setnombre($vrnombre){
        return $this->nombre= $vrnombre;
      }

      public function retefuente(){
          if ($this->sueldo>3750000){
              echo $this->sueldo;
              echo "<br>";
              $sueldo = ("Debe pagar la retencion de 9%");
          }else {
              echo $this->sueldo;
              echo "<br>";
              $sueldo = ("No debe pagar la retencion");
          }
          return $sueldo;
      }
}


?>