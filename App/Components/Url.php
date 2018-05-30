<?php

namespace App\Components;

class Url
{
    const EN = 'en';
    const RU = 'ru';

    /**
     * Gets language from SESSION or returns default
     *
     * @return string
     */
    public static function getLang() : string
    {
        $url = trim($_SERVER['REQUEST_URI'], '/');
        $arr = explode('/', $url);

        return ($arr[0] === self::EN) ? self::EN : self::RU;
    }
}