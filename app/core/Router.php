<?php

namespace app\core;

use const config\DEFAULT_ACTION;
use const config\DEFAULT_CONTROLLER;

class Router
{
    private Request $request;
    private array $url;

    public function __construct()
    {
        $this->request = new Request();
        $this->url = $this->resolveUrl();
    }

    public function run()
    {
        try 
        {
            $controller = ucwords($this->url[0] ?? DEFAULT_CONTROLLER);
            $action = ucwords($this->url[1] ?? DEFAULT_ACTION);
            $params = isset($this->url[2]) ? array_slice($this->url, 2) : [];

            if (!file_exists("{$controller}Controller.php")) {
                // TODO:
            }

            $controller = '\\app\\controllers\\' . $controller;
            $controller = new $controller;

            if (!method_exists($controller, $action)) {
                // TODO:
            }

            call_user_func([$controller, $action], $this->request, ...$params);
        } catch (\Exception $e) {
            // TODO:
        }
    }

    public function resolveUrl(): array
    {
        if ($this->request->getUrl()) {
            return explode("/", trim($this->request->getUrl(), "/"));
        }
        return [];
    }
}
