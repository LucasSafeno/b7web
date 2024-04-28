<?php

namespace src\controllers;

use \core\Controller;
use \src\models\Test;

class HomeController extends Controller
{

    public function fotos()
    {
        $test = new Test();
    }

    public function index()
    {
        $this->render('home', ['nome' => 'Lucas']);
    }

    public function sobre()
    {
        $this->render('sobre');
    }

    public function sobreP($args)
    {
        print_r($args);
    }
}
