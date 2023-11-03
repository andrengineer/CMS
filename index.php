<?php

// Inicializar configuraciones
include_once('config' . DIRECTORY_SEPARATOR . 'init.php');


require('../CMS/vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();
