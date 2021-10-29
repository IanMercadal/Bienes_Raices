<?php

function conectarDB() : mysqli {
    $db = new mysqli('localhost','root','root','bienes_raices'); // De este modo, está Orientado a Objetos


    if(!$db){
        echo "Erro, no se pudó conectar";
        exit;
    }
    return $db;
}