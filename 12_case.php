<?php 

    $nombre = "Carlos";
    $contrasena = 123456;

switch ($nombre) {
    case 'Ana':
        echo "Bienvenida " . $nombre . " al programa";
        break;
    case 'Carlos':
        echo "Bienvenido " . $nombre . " al programa";
        break;
    default:
        echo "Usuario no registrado ".$nombre;
        break;
    }
