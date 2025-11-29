<?php

namespace Fastkit\libs;


class Http
{


    private array $routes = [
        'GET' => [],
        'POST' => []
    ];


    public function middleware(bool $when, callable $callable)
    {

        if ($when) {
            $callable();
        }



    }
    private function getUri(): string
    {

        $uri = $_SERVER['REQUEST_URI'];
        $uri = parse_url($uri, PHP_URL_PATH);

        return $uri;


    }
    private function getMethodRequest(): string
    {

        return $_SERVER['REQUEST_METHOD'];
    }
    private function getRoutes()
    {

        return $this->routes;

    }

    public function get(string $name, callable $callable)
    {

        $this->routes['GET'][$name] = $callable;

    }
    public function post(string $name, callable $callable)
    {

        $this->routes['POST'][$name] = $callable;

    }

    public function start_routes()
    {

        $uri = $this->getUri();
        $method = $this->getMethodRequest();
        $all_routes = $this->getRoutes();

        if (!array_key_exists($uri, $all_routes[$method])) {

            require_once __DIR__ . "/../error/404.html";
            http_response_code(404);
            exit;

        }

        return $all_routes[$method][$uri]();

    }
}