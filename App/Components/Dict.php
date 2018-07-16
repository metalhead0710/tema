<?php

namespace App\Components;

class Dict
{
    /**
     * Returns translated string
     *
     * @param string $key
     *
     * @return string
     */
    static function _(string $key): string
    {
        $dict = $GLOBALS['dict'];

        return $dict[$key] ?? $key;
    }
}