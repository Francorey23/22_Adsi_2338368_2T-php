<?php
   require_once("01_claseJugador.php");
   require_once("01_Jugador.php");
   require_once("02_claseFutbol.php");

   echo "<H2> Jugador";
   $objJugador = new Jugador ("Julian",3149935142,"JAndres@gmail.com");

   echo "<H2> Jugador de futbol";
   $objJugador = new Jugador ("Julian",3149935142,"JAndres@gmail.com ",164, 12);

   print_r('<pre>');
   print_r($objJugador->getdatospersona());
   print_r('</pre>');

   $objJugador->setcelular(3108935142);
   echo "numero nuevo" .$objJugador->getcelular();
   echo "<H2> Jugador de voleibol";
   $objJugador = new Voleibol ("Julian Marin", 315342798,"Julian@gmail.com",164,12);
   print_r('<pre>');
   print_r($objJugador->getdatospersona());
   print_r('</pre>');

?>