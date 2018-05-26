<?php

INI_SET('DISPLAY_ERRORS', 1);

ERROR_REPORTING(E_ALL);

define('APP', dirname(__FILE__));
define ('DS', DIRECTORY_SEPARATOR);

require_once( APP . '/App/Components/Autoload.php' );

$router = new App\Components\Router();

$router->run();
