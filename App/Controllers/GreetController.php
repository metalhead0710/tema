<?php

namespace App\Controllers;

use App\Components\Controller as BaseController;

class GreetController extends BaseController
{

    public function index()
    {
        $target_date = new \DateTime('25.09.2018', new \DateTimeZone('Europe/Kiev'));
        $now = new \DateTime('now', new \DateTimeZone('Europe/Kiev'));
        //$now = new \DateTime('25.09.2018 23:59:59', new \DateTimeZone('Europe/Kiev'));

        if ($now < $target_date) {
            $this->view->vars(['target_date' => $target_date]);

            return $this->view->render('timer');
        } else if ((int)$now->format('m') === (int)$target_date->format('m') && (int)$now->format('d') === (int)$target_date->format('d')) {
            echo "greeting calls";
        } else {
            echo "Error. You are too late";
        }
    }
}
