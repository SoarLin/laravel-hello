<?php

class HomeController extends BaseController {
	public function home(){
		return View::make('home');
	}

	public function showWelcome()
	{
		return View::make('hello');
	}
}