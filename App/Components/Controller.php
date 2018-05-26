<?php

namespace App\Components;

class Controller
{
    public $view;

    //public $db;

    function __construct()
    {
        $this->view = new View();
        //$this->db = Db::getConnection();
    }
}