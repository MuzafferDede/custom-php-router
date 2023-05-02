<?php


namespace App;

use Exception;

class Router
{
    private static $routes = [];

    public static function addRoute($method, $path, $handler)
    {
        self::$routes[] = [$method, $path, $handler];
    }

    public static function dispatch($method, $uri)
    {
        foreach (self::$routes as $route) {
            $uri =   $uri = explode('?', $uri)[0];
            list($routeMethod, $routePath, $handler) = $route;
            $pattern = preg_replace('/{(\w+)}/', '([^\/]+)', $routePath);
            $pattern = '#^' . $pattern . '$#';
            if ($method === $routeMethod && preg_match($pattern, $uri, $matches)) {
                array_shift($matches);
                if (is_array($handler)) {
                    $controller = new $handler[0];
                    $method = $handler[1];
                    return call_user_func_array([$controller, $method], $matches);
                } else {
                    return call_user_func_array($handler, $matches);
                }
            }
        }
        throw new Exception("Route not found for $method $uri");
    }

    public static function get($path, $handler)
    {
        self::addRoute('GET', $path, $handler);
    }

    public static function post($path, $handler)
    {
        self::addRoute('POST', $path, $handler);
    }

    public static function put($path, $handler)
    {
        self::addRoute('PUT', $path, $handler);
    }

    public static function patch($path, $handler)
    {
        self::addRoute('PATCH', $path, $handler);
    }

    public static function delete($path, $handler)
    {
        self::addRoute('DELETE', $path, $handler);
    }
}
