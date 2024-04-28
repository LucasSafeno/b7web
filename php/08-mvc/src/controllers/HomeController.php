<?php

namespace src\controllers;

use \core\Controller;
use \src\models\Test;

class HomeController extends Controller
{

    public function fotos()
    {
        $this->render('fotos');
    }

    public function foto($parametros)
    {
        echo "Acessando a foto:" . $parametros['id'];
    }

    public function index()
    {
        $posts = [
            ['titulo' => 'Titulo teste 1', 'corpo' => 'Corpo teste 1 '],
            ['titulo' => 'Titulo teste 2', 'corpo' => 'Corpo teste 2 '],
            ['titulo' => 'Titulo teste 3', 'corpo' => 'Corpo teste 3 '],
            ['titulo' => 'Titulo teste 4', 'corpo' => 'Corpo teste 4 '],
            ['titulo' => 'Titulo teste 5', 'corpo' => 'Corpo teste 5 ']
        ];
        $this->render('home', [
            'nome' => 'Lucas',
            'idade' => 29,
            'posts' => $posts
        ]);
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
