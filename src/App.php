<?php

namespace App;

use App\RouteHandler\RouterHandler;

class App
{
    public function run(): void
    {
        $uri = $_SERVER['REQUEST_URI'];
        $routeHandler = new RouterHandler();
        $routeHandler->dispatch($uri);
    }
}
