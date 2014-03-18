<?php

class HomeController extends BaseController {
	public function home(){

		// Mail::send('emails.auth.test', array('name'=>'Soar'), function($message){
		// 	$message->to('soar.lin@gmail.com','Soar Lin')->subject('Test email');
		// });

		return View::make('home');
	}

	// public function showWelcome()
	// {
	// 	return View::make('hello');
	// }
}