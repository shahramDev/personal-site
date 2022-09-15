<?php

namespace core;

use FiftyOnRed\Blade\Blade;

class view {

    private static $blade;

    private static $views;

    private static $caches;

    private static $address = __DIR__.'/../';

    public static function render ( $view , $args = [] )
    {
        $config = config::get( 'views' , 'caches' );
        self::$views = self::$address.$config['views'];
        self::$caches = self::$address.$config['caches'];
        self::$blade = new Blade( self::$views , self::$caches );
        echo self::$blade->view()->make( $view , $args );
    }

}