<?php

namespace Source\Controllers\Financeiro;

use League\Plates\Engine;

class Web{

    private $view;

    public function __construct()
    {
        $this->view = Engine::create(  __DIR__ . "/../../View",  "php");
    }

    public function home($data){
        echo $this->view->render('home',$data);
    }
}