<?php

ini_set('display_errors',true);
ini_set("error_log", "./php-error.log");

require '../vendor/autoload.php';

use core\kernel;

kernel::load();