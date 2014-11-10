<?php

class LoginController extends \BaseController {

	public function index(){
		if(!Auth::check()){
			return View::make('partials.login');
		}else{
			$uid = Session::get('uid')->uid;
			$moods = RecordedMood::where('uid', '=', $uid)->get();
			return View::make('partials.main', ['moods'=>$moods]);
		}
	}
	public function login(){
		$username = Input::get('username');
		if (Auth::attempt(array( 'username' => $username, 'password' => Input::get('password')))) {
			$uid = User::where('username', '=', $username)->firstOrFail();
			Session::put('uid', $uid);
			$uid = Session::get('uid')->uid;
			$moods = RecordedMood::where('uid', '=', $uid)->get();
			return View::make('partials.main', ['moods'=>$moods]);
		}
		return View::make('partials.main', ['error'=>"Login unsuccessful"]);		
	}
	public function logout(){
		Auth::logout();
		Session::forget('uid');
		return View::make('partials.login');
	}


}
