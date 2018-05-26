<?php

namespace App\Components;

class View
{
    private $vars;

    public function vars($vars)
    {
        $this->vars = $vars;
    }

    public function render($name)
    {
        $contentPage = APP . DS . 'App' . DS . 'Views' . DS . $name . '.php';
        if (file_exists($contentPage) == false) {
            trigger_error('Page <strong>' . $name . '</strong> does not exist.', E_USER_NOTICE);

            return false;
        }

        if (isset($this->vars)) {
            foreach ($this->vars as $key => $value) {
                $$key = $value;
            }
        }

        include_once $contentPage;
    }
}
