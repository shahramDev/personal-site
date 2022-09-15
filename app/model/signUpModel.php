<?php

namespace App\model;

use core\model;
use Illuminate\Database\Capsule\Manager as Capsule;

class signUpModel extends model {

    public static function getUser ( $userName )
    {

        self::load();
        
        return Capsule::select('SELECT * FROM users WHERE userName = ?', [$userName]);

    }

    public static function addUser ( $userName , $password )
    {
        self::load();

        return Capsule::insert('INSERT INTO users (userName , password) VALUES (?,?)',[$userName,$password]);
    }
}