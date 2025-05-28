<?php
namespace Core;

class Router
{
    protected array $routes = [];

    /**
     * Load a routes file into a new Router instance.
     */
    public static function load(string $routesFile): self
    {
        $router = new static;
        require $routesFile;
        return $router;
    }

    public function get(string $uri, string $controllerAction)
    {
        $this->routes['GET'][$uri] = $controllerAction;
    }

    public function post(string $uri, string $controllerAction)
    {
        $this->routes['POST'][$uri] = $controllerAction;
    }

    public function direct(string $uri, string $requestMethod)
    {
        // strip query-string, if any
        $uri = strtok($uri, '?');

        if (isset($this->routes[$requestMethod][$uri])) {
            return $this->callAction(
                ...explode('@', $this->routes[$requestMethod][$uri])
            );
        }

        throw new \Exception("No route defined for {$uri}");
    }

    protected function callAction(string $controller, string $action)
    {
        $controller = "Controllers\\{$controller}";
        $instance   = new $controller;
        return $instance->$action();
    }
}
