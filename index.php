<?php

INI_SET('DISPLAY_ERRORS', 1);

ERROR_REPORTING(E_ALL);

define('APP', dirname(__FILE__));
define ('DS', DIRECTORY_SEPARATOR);

require_once(APP . '/App/Components/Autoload.php');
require_once(APP . '/App/Components/Dict.php');

$lang = App\Components\Url::getLang();
if($lang) {
    $_SESSION['lang'] = trim(strip_tags($lang));
    $date = time() + 30*24*60*60;
    setcookie('lang',trim(strip_tags($lang)),$date);
}
else if (@$_COOKIE['lang']) {
    $_SESSION['lang'] = $_COOKIE['lang'];
}
else {
    $_SESSION['lang'] = 'ru';
}
$dict = parse_ini_file(APP . '/lang/' . $_SESSION['lang'].'.ini');


$router = new App\Components\Router();

// Öÿ ñğàíü ñòàğòèòü ğîóòåğ
$router->run();
