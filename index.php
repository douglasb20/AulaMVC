<?php

require __DIR__ . "/vendor/autoload.php";

$route = new \CoffeeCode\Router\Router(ROOT);

/**
 * web
 */
$route->group(null)->namespace('Source\Controllers\Financeiro');
$route->get("/", "Web:home");
$route->get("/{nome}", "Web:home");

/**
 * ERROR
 */
$route->group("ops");
$route->get("/{errcode}", "Web:error");

/**
 * PROCESS
 */
$route->dispatch();

if ($route->error()) {
    $route->redirect("/ops/{$route->error()}");
}