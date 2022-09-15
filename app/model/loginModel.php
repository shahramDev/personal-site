<?php

namespace App\model;

use core\model;
use Illuminate\Database\Capsule\Manager as Capsule;

class loginModel extends model {

    public static function getUser ( $userName , $password )
    {

        self::load();
        
        return Capsule::select('SELECT * FROM users WHERE userName = ? AND password = ?', [$userName,$password]);

    }
}