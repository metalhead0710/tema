<?php

spl_autoload_register(function ($class) {
    $class = str_replace('\\', DS, $class);
	include APP . '/' . $class . '.php';
});