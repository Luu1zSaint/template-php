<?php

namespace app\classes;

use Exception;
use Throwable;

class Router
{
    
    public function __construct( 
        private $path = null, 
        private $method = null
        )
    {
        $this->path = $_SERVER['REQUEST_URI'];
        $this->method = $_SERVER['REQUEST_METHOD'];
    }

    private function routerFound(array $routes)
    {
        if(!isset($routes[$this->method])){
            throw new Exception("Router {$this->path} does not exist");
        }

        if(!isset($routes[$this->method][$this->path])){
            throw new Exception("Router {$this->path} does not exist");
        }
    }
    private function controllerFound(string $controllerNamespace, string $controller, string $method)
    {
        if(!class_exists($controllerNamespace)){
            throw new Exception("Controller {$controller} does not exist");
        }
        if(!method_exists($controllerNamespace, $method)){
            throw new Exception("Method {$method} does not exist in {$controller}");
        }
    }
    public function execute(array $routes)
    {
        $this->routerFound($routes);

        [$controller, $method] = explode('@', $routes[$this->method][$this->path]);
        $controllerNamespace = "app\\controllers\\{$controller}";

        $this->controllerFound($controllerNamespace, $controller, $method);

        $controllerInstance = new $controllerNamespace;
        $controllerInstance->$method();
    }

    
}


