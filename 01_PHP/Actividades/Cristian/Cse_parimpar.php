<?php

    $numero = $_GET["numero"];

    if ($numero%2 ==0 ){
        echo "EL NUMERO ".$numero." ES PAR";
    }else{
        echo "EL NUMERO ".$numero." ES IMPAR";
    }
    print"<p>";
    echo '<a href="http://localhost/5_ADSI_2338368/For_parimpar.php?numero=3&btn_enviar=Ejecutar"><input type="submit" name="btn_VOLVER" value="Volver"></a>';
?>