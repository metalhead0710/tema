<?php

spl_autoload_register(function ($class) {
    $class = str_replace('\\', DS, $class);
    require_once APP . '/' . $class . '.php';
});