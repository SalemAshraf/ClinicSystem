<?php
namespace Core;

class Router {
    private $routes = [];

    public function add(string $method, string $pattern, $callback) {
        $this->routes[] = compact('method','pattern','callback');
    }

    public function get($pattern, $callback) {
        $this->add('GET', $pattern, $callback);
    }
    public function post($pattern, $callback) {
        $this->add('POST', $pattern, $callback);
    }

    public function dispatch($uri, $requestMethod) {
        $path = parse_url($uri, PHP_URL_PATH);
        foreach ($this->routes as $route) {
            if ($route['method'] !== $requestMethod) continue;
            if (preg_match("#^{$route['pattern']}$#", $path, $matches)) {
                array_shift($matches);
                list($class, $method) = $route['callback'];
                $controller = new $class;
                return call_user_func_array([$controller, $method], $matches);
            }
        }
        http_response_code(404);
        echo "404 Not Found";
    }
}
