<?php

namespace App\controller;

use core\view;

class HomeController {
    public static function show ()
    {

        view::render( 'Home' , ['login'=> $_SESSION['login']] );

    }
}