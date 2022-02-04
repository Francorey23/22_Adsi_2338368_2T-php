<?php
echo "PROGRAMA PARA SABER CUANDO UN NUMERO ES PAR O IMPAR".'<br />';
echo "-------------------------------------------------------------------------------------------------<br>";
echo "RESULTADO: ".'<br />';
#ENTRADA
$num=$_REQUEST["numero"];

if($num%2==0){
    echo "El numero ".$num. "  es par"."<p>";
    }else{
        echo "El numero ".$num." es impar"."<p>";
    }
"<p>";

    echo '<a href="http://localhost/ADSI_2338368/FORMULARIOPar_impar.php"><input type="submit" name="btn_enviar" value="Regresar"></a>'

?>