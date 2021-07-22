<?php

namespace Source\Controllers\Financeiro;

use League\Plates\Engine;

class DefaultWeb{

    public function __construct()
    {
        $this->view = Engine::create(  __DIR__ . "/../../View/financeiro",  "php");
    }
    
    public function home($data){
        echo $this->view->render('home',$data);
    }
}