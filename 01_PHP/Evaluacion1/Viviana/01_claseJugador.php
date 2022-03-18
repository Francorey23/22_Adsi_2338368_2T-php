<?php

class Jugador
{
    //Atributos
    protected $nombre;
    public $celular;
    public $email;
    


    public function __construct($vrnombre, $vrcelular, $vremail)
    {
        $this->nombre = $vrnombre;
        $this->celular = $vrcelular;
        $this->email = $vremail;
    }
    public function getcelular(){
        return $this->celular;
    }
   
    public function setcelular($celular){
        $this->celular = $celular;
    }

    public function getdatospersona(){
        $arrayJugador=array(
            'nombre:'=>$this->nombre,
            'celular:'=>$this->celular,
            'email:'=>$this->email,

        );
        return $arrayJugador;
        
    }
}


?>