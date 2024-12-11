<?php

namespace Project\Delivery\Http;

class Routes
{
    protected static array $routes = [];

    public static function get(string $uri, string $options)
    {
        self::$routes[] = 
        [
            "method"    => "GET",
            "uri"       => $uri,
            "options"   => $options
        ];
    }

    public static function post(string $uri, string $options)
    {
        self::$routes[] = 
        [
            "method"    => "POST",
            "uri"       => $uri,
            "options"   => $options
        ];
    }

    public static function returnRoutes()
    {
        return self::$routes;
    }

}
?>