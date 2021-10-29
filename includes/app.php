<?php

require 'funciones.php';
require 'config/database.php';
require __DIR__ . '/../vendor/autoload.php';

// Conectarnos a la BBDD
$db = conectarDB();

use App\Propiedad;

Propiedad::setDB($db); // Al ser estático, no hace falta instanciarse