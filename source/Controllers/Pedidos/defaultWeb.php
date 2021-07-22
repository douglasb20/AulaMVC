<?php

namespace Source\Controllers\Pedidos;

use League\Plates\Engine;

class DefaultWeb{

    public function __construct(object $router)
    {
        $this->router = $router;
        $this->view = Engine::create(  __DIR__ . "/../../View/pedidos",  "php");
    }
    
    public function home($data){
        echo $this->view->render('home',$data);
        var_dump($data);
    }
}