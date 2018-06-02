<?php

namespace App\Core;

class App{

    /**
     * Config 
     */
    public static $config = [];

    /**
     * LOAD CONFIGURATION
     */
    public static function load($key, $value){
        static::$config[$key] = $value;
    }
}