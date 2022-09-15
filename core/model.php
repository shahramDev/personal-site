<?php

namespace core;

use Illuminate\Database\Capsule\Manager as Capsule;

class model {

    private static $DBdriver;

    private static $DBhost;

    private static $DBname;

    private static $DBuser;

    private static $DBpassword;

    private static $DBcharset;

    private static $DBcollation;

    protected static $Capsule;

    protected static function load ()
    {

        $config = config::get('DBdriver','DBhost','DBname','DBuser','DBpassword','DBcharset','DBcollation');
        self::$DBdriver = $config['DBdriver'];
        self::$DBhost = $config['DBhost'];
        self::$DBname = $config['DBname'];
        self::$DBuser = $config['DBuser'];
        self::$DBpassword = $config['DBpassword'];
        self::$DBcharset = $config['DBcharset'];
        self::$DBcollation = $config['DBcollation'];
        self::$Capsule = new Capsule;
        self::$Capsule->addConnection([
           "driver" => self::$DBdriver,
           "host" => self::$DBhost,
           "database" => self::$DBname,
           "username" => self::$DBuser,
           "password" => self::$DBpassword,
           'charset' => self::$DBcharset,
           'collation' => self::$DBcollation
        ]);
        self::$Capsule->setAsGlobal();
        self::$Capsule->bootEloquent();

    }

}