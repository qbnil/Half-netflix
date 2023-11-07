<?php

namespace App;

use App\RouteHandler\RouterHandler;

class App
{
    public function run(): void
    {
        $uri = $_SERVER['REQUEST_URI'];
        $method = $_SERVER['REQUEST_METHOD'];
        $routeHandler = new RouterHandler();
        $routeHandler->dispatch($uri, $method);
    }
}
