<?php

declare(strict_types=1);

/**
 * Handles application routing.
 *
 * Registers routes and dispatches incoming HTTP requests
 * to the appropriate controller or callback.
 */

namespace App\Core;

class Router
{
    private array $routes = [];

    /**
     * Register a GET route.
     *
     * @param string $uri
     * @param mixed  $action
     */

    public function get(string $uri, mixed $action): void
    {
        $this->routes['GET'][$uri] = $action;
    }

    public function dispatch(): void
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if (isset($this->routes[$method][$uri])) {

            // Retrieve the action associated with the current request
            $action = $this->routes[$method][$uri];

            // Controller actions are stored as [Controller::class, 'method']
            if (is_array($action)) {

                // Split the controller class name and method name
                [$controller, $method] = $action;

                // Instantiate the controller dynamically
                $controller = new $controller();
                
                // Execute the requested controller method
                $controller->$method();

            } else {

                call_user_func($action);

            }

            return;
        }

        http_response_code(404);
        echo '404 - Page not found';
    }

}


