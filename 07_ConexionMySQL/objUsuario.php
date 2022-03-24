<?php 
    require_once("usuario.php");

    $objUsuario = new Usuario();
    //$insertarUsuario = $objUsuario->insertarUsuario("Julian Garcia", "julian@gmail.com", 123456);
    //echo $insertarUsuario;

    //MODIFICAR USUARIO
    //$editarUsuario = $objUsuario->editarUsuario(3,"Juliana Suarez","juliana@hotmail.com",123456);

    //ELIMINAR USUARIO
   // $eliminarUsuario = $objUsuario->eliminarUsuario(6);
    
    //VER LA LISTA DE USUARIOS
    /* $verUsuarios = $objUsuario->getUsuarios();
    
    print_r('<pre>');
    print_r($verUsuarios);
    print_r('</pre>');  
 */

 //VER 1 SOLO USUARIO
 $idUsuario = $objUsuario->getIdusuario(5);
 print_r('<pre>');
 print_r($idUsuario);
 print_r('</pre>');
