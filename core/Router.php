<?php 

class Router{

    protected $routes = [
        "GET" => [],
        "POST" => []
    ];

    public function register($routes)
    {
        $this->routes = $routes;
    }

    public static function load($filenmae)
    {
        $router =  new Router ;
        require $filenmae;
        return $router;
    }

    public function get($uri, $controller)
    {
        $this->routes["GET"][$uri] = $controller ;
    }

    public function post($uri, $controller)
    {
        $this->routes["POST"][$uri] = $controller ;
    }

    public function direct($uri, $method)
    {
        if(array_key_exists($uri, $this->routes[$method])){
            return $this->routes[$method][$uri];
        }
        die("404 Page");
    }
}