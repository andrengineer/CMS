<?php

// iniciar sesión
session_start();

// Autocargar Clases
spl_autoload_register(function ($classLoad) {
    $filePath = str_replace('\\', DIRECTORY_SEPARATOR, $classLoad) . '.php';
    if (file_exists($filePath)) {
        require_once $filePath;
    }
});

// Leer Variables de Entorno
define('ENV', parse_ini_file('.env'));
