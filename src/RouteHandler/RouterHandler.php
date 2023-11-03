<?php

namespace App\RouteHandler;

use Couchbase\PathNotFoundException;

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

    public function dispatch(string $uri, string $method): void
    {
        $route = $this->findRoute($uri, $method);
        if (! $route) {

        }
        $routes = $this->getRoutes();
        $routes[$uri]();

    }

    private function findRoute(string $uri, string $method): Route
    {
        if (! isset($this->routes[$method][$uri])) {
            return $this->notFound();
        }

        return $this->routes[$method][$uri];

    }

    private function notFound()
    {
        $notFound = new PathNotFoundException();

        return $notFound->getMessage();
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
