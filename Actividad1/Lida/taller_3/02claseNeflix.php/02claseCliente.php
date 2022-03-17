<?php
require_once("01claseNeflix.php");


    $objNeflix= new Neflix("nueva era",2001,"nueva era2","3 dias","2022",8,"2020");

    print_r('<pre>');
    print_r($objNeflix->getpropiedades());
    print_r('</pre');
    
    print_r('<pre>');
    print_r($objNeflix);
    print_r('</pre');
    echo"<br>costo de alquiler:<br>".$objNeflix->costoalquiler('');


?>    
