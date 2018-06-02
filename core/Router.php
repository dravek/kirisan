<?php

namespace App\Core;

Class Router{


	/**
	 * Registered Routes
	 */
	public $routes = [
		'GET' => [],
		'POST' => []
	];


	/**
	 * Load routes defined in routes.php
	 * 
	 * @param String $file
	 */
	public static function load($file){

		$router = new static;

		require $file;

		return $router;
	}

	/**
	 * Register a GET route
	 * 
	 * @param string $uri
	 * @param string $controller
	 */
	public function get($uri, $controller){

		$this->routes['GET'][$uri] = $controller;
	}

	/**
	 * Register a POST route
	 * 
	 * @param string $uri
	 * @param string $controller
	 */
	public function post($uri, $controller){

		$this->routes['POST'][$uri] = $controller;
	}


	/**
	 * Check if route is defined by user
	 * 
	 * @param string $uri
	 * @param string $requestType
	 */
	public function direct($uri, $requestType)
	{
		if (array_key_exists($uri, $this->routes[$requestType])) {

			$test = explode('@',$this->routes[$requestType][$uri]);
			return $this->call($test[0],$test[1]);
		}

		return $this->view("partials/error404");	
	}


	/**
	 * Call the method from the controller
	 * 
	 * @param string $controller
	 * @param string $action
	 */
	public function call($controller,$action)
	{
		$controller = "App\\Controllers\\{$controller}";
		$c = new $controller;

		if (! method_exists($controller, $action)) {
			return $this->view("partials/error404");
		}

		return $c->$action();   
	}

	
	/**
	 * Load the view
	 * 
	 * @param string
	 * @param array
	 */
	public static function view($name, $data = [])
	{
	    extract($data);

	    return require "app/views/{$name}.view.php";
	}

}