<?php

namespace Project\Delivery\Library;

class Sessions
{
    public static function add(string $key, string|array $value)
    {
        $_SESSION[$key] = $value;
    }

    public static function has(string $key)
    {
        return isset($_SESSION[$key]);
    }

    public static function get(string $key)
    {
        if(self::has($key))
        {
            return $_SESSION[$key];
        }
    }

    public static function getAll(string $key)
    {
        if(self::has($key))
        {
            echo $_SESSION[$key];
        }
    }

    public static function remove(string $key)
    {
        unset($_SESSION[$key]);
    }

    public static function removeAll()
    {
        session_destroy();
    }
}
?>