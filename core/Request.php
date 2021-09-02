<?php

class Request
{
    public static function uri()
    {

        // die(var_dump($_SERVER));
        // die(var_dump(trim(parse_url($_SERVER['REQUEST_URI'] , PHP_URL_PATH), '/')));
        // die(var_dump(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));
        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}
