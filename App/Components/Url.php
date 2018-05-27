<?php

namespace App\Components;


class Url
{
    public static function getLang()
    {
        $url = trim($_SERVER['REQUEST_URI'], '/');
        $arr = explode('/', $url);
        if ($arr[0] === 'en') {
            return 'en';
        } else {
            return 'ru';
        }
    }
}