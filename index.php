<?php

require __DIR__ . "/vendor/autoload.php";


$route  = new \CoffeeCode\Router\Router(ROOT);
$aRoute = explode("/", $_REQUEST['route']);

array_shift($aRoute);


/**
 * web
 */
$aRoute[0] = ucfirst( $aRoute[0] );
$route->group('financeiro')->namespace("Source\Controllers\Financeiro");
$route->get("/", "Web:home" );
$route->get("/{nome}", "Web:home");
$route->post("/{nome}", "Web:home");

/**
 * Pedidos
 */
// $route->group('pedidos')->namespace('Source\Controllers\Pedidos');
// $route->get("/", "Web:home");
// $route->get("/Teste", "Web:home", 'name.home');
// $route->get("/{nome}", "Web:home");
// $route->post("/{nome}", "Web:home");

/**
 * ERROR
 */
$route->group("ops");
$route->get("/{errcode}", "Web:error");

/**
 * PROCESS
 */
$route->dispatch();

// if ($route->error()) {
//     $route->redirect("/ops/{$aRoute[0]}");
// }
