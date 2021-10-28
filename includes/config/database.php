<?php

function conectarDB() : mysqli {
    $db = mysqli_connect('localhost','root','root','bienes_raices');


    if(!$db){
        echo "Erro, no se pudó conectar";
        exit;
    }
    return $db;
}