<?php

namespace Project\Delivery\Core;

use Project\Delivery\Library\Uri;

class Core 
{
    protected string $prefixController = "Project\\Delivery\\App\\Controllers\\";

    public function dispatch(array $routes)
    {
        foreach($routes as $route)
        {
            if($route["method"] === Uri::getRequestMethod())
            {
                if($this->run($route["uri"], $route["options"]))
                {
                    return;
                }
            }
        }
        echo "route not found";
    }

    public function run(string $uri, string $options)
    {
        if(str_contains($uri, "(:numeric)"))
        {
            $uri = str_replace("(:numeric)", "([0-9]+)", $uri);
        }

        if(str_contains($uri, "(:alphabet)"))
        {
            $uri = str_replace("(:alphabet)", "([a-zA-Z]+)", $uri);
        }

        $pattern = str_replace("/", "\/", trim($uri, "/"));
        if(preg_match("/^$pattern$/", Uri::getUri(), $matches))
        {
            array_shift($matches);
            $params = $matches;
            [$controller, $action] = explode("@", $options);
            $controller = $this->prefixController . $controller;
            if(!class_exists($controller) || !method_exists($controller, $action))
            {
                echo "Controller '{$controller}' or method '{$action}' not exists!";
            } else 
            {
                $instanceController = new $controller;
                call_user_func_array([$instanceController, $action], [...$params]);
            }
            return true;
        } else 
        {
            return false;
        }
    }
}


?>