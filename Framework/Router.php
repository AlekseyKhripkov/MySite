<?php

class Router
{
    private string $path;

    public function __construct(string $path)
    {
        $path = rtrim($path, '/\\');
        $path .= DS;
        $this->path = $path;
    }

    public function start(): void
    {
        $this->getController($file, $controller, $action, $args);

        if (is_readable($file) === false) {
            die ('404 Not Found');
        }

        include ($file);

        $controller = new $controller();

        if (is_callable([$controller, $action]) === false) {
            die ('404 Not Found');
        }

        $controller->$action();
    }

    private function getController(&$file, &$controller, &$action, &$args): void
    {
        $parts = explode('/', $this->getURI());

        $controller = array_shift($parts);
        if (empty($controller)) {
            $controller = 'index';
        }

        $action = array_shift($parts);
        if (empty($action)) {
            $action = 'index';
        }

        $controller = ucfirst($controller) . 'Controller';
        $action = $action . 'Action';

        $file = $this->path . $controller . '.php';
        $args = $parts;
    }

    private function getURI(): string
    {
        $route = (empty($_SERVER['REQUEST_URI'])) ? '' : $_SERVER['REQUEST_URI'];
        $route = trim($route, '/\\');
        if (empty($route)) {
            $route = 'index';
        }

        return $route;
    }
}
