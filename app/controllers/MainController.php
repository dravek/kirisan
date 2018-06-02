<?php

namespace App\Controllers;

use App\Core\Router;

Class MainController{

	public function index()
	{
		Router::view('main');
	}

	public function test(){
		echo "Main Controller -> test";
	}

}
