<?php

namespace App;

class Request
{
    private static $params;

    private static function init()
    {
        self::$params = $_REQUEST;
    }

    public static function get($key = null)
    {
        if (!isset(self::$params)) {
            self::init();
        }

        if ($key === null) {
            return self::$params;
        }

        return isset(self::$params[$key]) ? self::$params[$key] : null;
    }


    public static function all()
    {
        if (!isset(self::$params)) {
            self::init();
        }

        return self::$params;
    }
}
