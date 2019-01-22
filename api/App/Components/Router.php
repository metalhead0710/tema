<?php

namespace App\Components;

class Router
{
    const EN = 'en';

    private $routes;

    public function __construct()
    {
        $this->routes = include_once APP . '/config/routes.php';
    }

    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');

        } else {
            if (!empty($_SERVER['PATH_INFO'])) {
                return trim($_SERVER['PATH_INFO'], '/');
            } else {
                if (!empty($_SERVER['QUERY_STRING'])) {
                    return trim($_SERVER['QUERY_STRING'], '/');
                }
            }
        }
    }

    private function getInternalRoute(string $uri)
    {
        foreach ($this->routes as $key => $route) {
            if ($key === $uri) {
                return $route;
            }
        }
    }

    public function run()
    {
        $uri = $this->getURI();
        $route = $this->getInternalRoute($uri);
        $controller = '\\App\Controllers\\' . $route['Controller'];
        $action = $route['Action'];
        $params = [];
        if (!is_callable(array($controller, $action))) {
            header('HTTP/1.1 404 Not Found');

            return false;

        } else {
            $controllerObj = new $controller;
            call_user_func_array([$controllerObj, $action], $params);
        }
    }
}
