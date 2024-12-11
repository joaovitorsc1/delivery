<?php

namespace Project\Delivery\Library;

class Uri
{
    public static function getUri()
    {
        return parse_url(trim($_SERVER["REQUEST_URI"], "/"), PHP_URL_PATH);
    }

    public static function getRequestMethod()
    {
        return $_SERVER["REQUEST_METHOD"];
    }
}
?>