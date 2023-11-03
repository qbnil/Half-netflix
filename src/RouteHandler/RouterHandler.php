<?php

namespace App\RouteHandler;

class RouterHandler
{
    public function dispatch(string $uri): void
    {
        $routes = $this->getRoutes();
        $routes[$uri]();

    }

    private function getRoutes(): array
    {
        return require_once APP_PATH.'/config/routes.php';
    }
}
