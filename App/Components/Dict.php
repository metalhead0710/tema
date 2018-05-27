<?php

namespace App\Components;

class Dict
{

    static function _($key)
    {
        $dict = $GLOBALS['dict'];

        if ($dict[$key]) {
            return $dict[$key];
        } else {
            return $key;
        }
    }
}