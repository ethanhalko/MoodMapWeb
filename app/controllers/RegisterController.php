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
			$uid = Session::get('uid')->uid;
			$moods = RecordedMood::where('uid', '=', $uid)->get();
			return View::make('partials.main', ['moods'=>$moods]);
		}
		else{
			return  'Passwords do not match';
		}
	}
}
