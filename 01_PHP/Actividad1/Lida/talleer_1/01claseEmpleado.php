<?php
class Empleado{

public$nombre;
private$celular;
public$cargo;
protected$sueldo;
static $aux_transporte="5%";

public function __construct($vrnombre, $vrcelular, $vrcargo, $vrsueldo, $vraux_transporte)
{
    $this->nombre=$vrnombre;
    $this->celular=$vrcelular;
    $this->cargo=$vrcargo;
    $this->sueldo=$vrsueldo;
    Empleado::$aux_transporte;
}

public function getnombre(){
    return$this->nombre;
}
public function setnombre($vrnombre){
    $this->nombre=$vrnombre;
}
public function getcelular(){
    return$this->celular;
}
public function setcelular($vrcelular){
    $this->celular=$vrcelular;
}
public function getsueldo(){
    return$this->sueldo;
}
public function setsueldo($vrsueldo){
    $this->sueldo=$vrsueldo;
}
 
 
    public function getEmpleado(){
        $arrayempleado=array( 'cargo:'=> $this->cargo,
                              'sueldo:'=> $this->sueldo,
                              'aux_transporte:' =>Empleado::$aux_transporte,                     
                        
    );
    return$arrayempleado;                      
    }

    public function Retencion($vrvalor_retiro){
        if($this->saldo > $vrvalor_retiro){
            $this->saldo = $this->saldo = $vrvalor_retiro;
            echo"ud.puede hacer su etiro";
        }
     
        return $this->saldo;
     }
}     
?>