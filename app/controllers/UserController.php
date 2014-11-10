<?php

class UserController extends \BaseController {

	public function registerView(){
		return View::make('partials.register');
	}
	public function login(){
		return View::make('partials.login');
	}

	public function register(){
		if( Input::get('password') == Input::get('confirm') ){
			User::create([
				'username'=>Input::get('username'),
				'password'=>Hash::make(Input::get('password'))
			]);
			return  'User registered';
		}
		else{
			return  'Passwords do not match';
		}
	}

}
