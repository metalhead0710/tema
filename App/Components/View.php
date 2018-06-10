<?php

namespace App\Components;

class View
{
    private $vars;

    public function vars($vars)
    {
        $this->vars = $vars;
    }

    public function render(string $name)
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

    public function renderEmail(string $name) : string
    {
        ob_start();
        $this->render($name);
        $message = ob_get_clean();

        return $message;
    }
}
