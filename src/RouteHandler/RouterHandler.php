<?php

namespace App\RouteHandler;

class RouterHandler
{
    private array $routes = [
        'GET' => [],
        'POST' => [],
    ];

    public function __construct()
    {
        $this->initRoutes();
    }

    public function dispatch(string $uri): void
    {
        $routes = $this->getRoutes();
        $routes[$uri]();

    }

    /**
     * @return Route[]
     */
    private function getRoutes(): array
    {
        return require_once APP_PATH.'/config/routes.php';
    }

    private function initRoutes(): void
    {
        $routes = $this->getRoutes();
        foreach ($routes as $singleRoute) {
            $this->routes[$singleRoute->getMethod()][$singleRoute->getUri()] = $singleRoute;
        }
    }
}
