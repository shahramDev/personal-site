<?php

namespace core;

use Bramus\Router\Router;

class kernel {

    public static function load () {

        $expire = 7*24*3600;
        ini_set('session.gc_maxlifetime', $expire);
        session_start();
        setcookie( session_name() , session_id() , time() + $expire ); 
        if( !isset($_SESSION['login']) ){
            $_SESSION['login'] = false;
        }

        $Router = new Router();

        require __DIR__.'/../routes/web.php';

        $Router->run();
    }
    
}