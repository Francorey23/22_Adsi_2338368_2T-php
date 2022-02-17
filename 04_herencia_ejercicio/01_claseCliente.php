<?php 
    
    class Cliente{
    private         $cedula;
    public          $nombre;
    protected       $salario;


    public function __construct($vrcedula, $vrnombre, $vrsalario)
    {
        $this->cedula = $vrcedula;
        $this->nombre = $vrnombre;
        $this->salario = $vrsalario;
    }
    //ver los valores del atributo
    public function getCedula(){
        return $this->cedula;
    }
    //cambiar los valores del atributo
    public function setSalario($vrsalario){
        $this->salario = $vrsalario;
    }
    public function getSalario(){
        return $this->salario;
    }


}//end clase
?>