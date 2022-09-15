<?php

namespace App\controller;

use App\core\controller;

class notFoundController extends controller {
    public static function index ()
    {
        self::view( 'notFound' , [] );
    }
}