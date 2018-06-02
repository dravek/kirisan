<?php

namespace App\Core;

class Request{

	/**
	 * Get the URI
	 */
	public static function uri(){

		return trim(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'
        );
	}


	/**
	 * Get the Method
	 */
	public static function method(){

		return trim(
            $_SERVER['REQUEST_METHOD']
        );
	}
	
}