<?php

class Router{

    private $routes;

    public function __construct(){
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
    }

    private function getUri(){
        if (!empty($_SERVER['REQUEST_URI'])){
            return trim($_SERVER['REQUEST_URI'], '/');
        }
        return null;
    }

    public function run(){
        $uri = $this->getUri();

        foreach ($this->routes as $uriPattern => $path) {
            if(preg_match("~$uriPattern~", $uri)) {

                echo '<br>Где ищем (запрос, который набрал пользователь):'.$uri;
                echo '<br>Что ищем (совпадения из правила):'.$uriPattern;
                echo '<br>Кто обрабатывает ';
            }
        }
    }
}

