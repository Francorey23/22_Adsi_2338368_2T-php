<?php
echo "PROGRAMA QUE PERMITA RESOLVER OPERACIONES ARITMETICAS".'<br />';
echo "---------------------------------------------------------------------------------------------<br>";
echo "RESULTADO: ".'<br />';



    #ENTRADA
        if (isset($_REQUEST['btn_enviar'])) {
            

        $num1 = $_REQUEST["numero1"];
        $num2 = $_REQUEST["numero2"];
        $operacion = $_REQUEST["operacion"];

            switch($operacion){
                case $operacion == "Suma":
                    echo "El resultado de la suma es: ".$num1 + $num2;
                    break;
                
    }
        }

    


?>