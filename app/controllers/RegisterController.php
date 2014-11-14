<?php
//TODO change to user controller, handle register and login
class RegisterController extends \BaseController {
	public function index(){
		return View::make('partials.register');
	}
	public function register(){
		if( Input::get('password') == Input::get('confirm') ){
			User::create([
				'username'=>Input::get('username'),
				'password'=>Hash::make(Input::get('password'))
			]);
			//todo: add "now log in message"
			return Redirect::action('LoginController@index');

		}
		else{
			return Redirect::back()->withInput()->withErrors(['Passwords don\'t match!']);
		}
	}
}
