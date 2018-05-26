<?php

namespace App\Controllers;

use App\Components\Controller as BaseController;

class HomeController extends BaseController
{

    public function index()
    {
        return $this->view->render('index');
    }
}