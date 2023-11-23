<?php

require_once 'src/controllers/DefaultController.php';

class Router
{
    public static array $routes;

    public static function get($url, $view): void
    {
        self::$routes[$url] = $view;
    }

    public static function post($url, $view): void
    {
        self::$routes[$url] = $view;
    }

    public static function run($url): void
    {
        $urlParts = explode("/", $url);
        $action = $urlParts[0];

        if (!array_key_exists($action, self::$routes)) {
            die("Wrong url!");
        }

        $controller = self::$routes[$action];
        $object = new $controller;
        $action = $action ?: 'index';

        $id = $urlParts[1] ?? '';

        $object->$action($id);
    }
}