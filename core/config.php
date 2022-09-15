<?php

namespace core;

use Dotenv\Dotenv as env;

class config {

    private static $config = [];

    public static function get ( ...$name )
    {
        $env = self::load();

        foreach ( $name as $value ) {
            self::$config[$value] = $env[$value];
        }

        return self::$config;
    }

    public static function load ()
    {
        env::createImmutable(__DIR__)->load();
        return $_ENV;
    }
}