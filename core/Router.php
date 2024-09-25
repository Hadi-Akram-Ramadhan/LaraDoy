<?php

/**
 * Router Class
 * 
 * Kelas ini nge-handle routing di framework lo.
 * Ini nge-map URL ke controller dan method yang sesuai.
 * 
 * Cara pake:
 * 1. Bikin instance Router
 * 2. Tambah route pake method add()
 * 3. Panggil dispatch() dengan URL yang diminta
 * 
 * @package Core
 */

class Router {
    protected $routes = [];

    public function add($route, $action) {
        $this->routes[$route] = $action;
    }

    public function dispatch($url) {
        if (array_key_exists($url, $this->routes)) {
            $action = explode('@', $this->routes[$url]);
            $controller = $action[0];
            $method = $action[1];

            // Include the controller and call method
            require_once "controllers/{$controller}.php";
            $controllerInstance = new $controller();
            
            // Pass any URL parameters
            $params = array_slice(explode('/', $url), 2);
            call_user_func_array([$controllerInstance, $method], $params);
        } else {
            http_response_code(404);
            echo "404 - Not Found";
        }
    }
}
