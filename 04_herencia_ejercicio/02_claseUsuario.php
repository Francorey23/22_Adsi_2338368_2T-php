<?php
    require_once("01_claseCliente.php");

    class Usuario extends Cliente {

        private $email;
        private $password;

        //asignar los atributos
        public function __construct($vrcedula, $vrnombre, $vrsalario, $vremail, $vrpassword){

            //parent permite llevar los datos a la calse cliente
            parent::__construct($vrcedula, $vrnombre, $vrsalario);
            $this->email = $vremail;
            $this->password = $vrpassword;

        }

        public function getEmail(){
            return $this->email;
        }

        public function setEmail($vremail){
            $this->email = $vremail;
        }
    }//end clase

?>