<?php

/**
 * KIRISAN FRAMEWORK
 * Framework for learning purposes
 * 
 * dravek 2018
 */

require 'vendor/autoload.php';

use App\Core\{Router,Request,App};

App::load('config', require 'config/config.php');

Router::load('app/routes.php')
    ->direct(Request::uri(), Request::method());
