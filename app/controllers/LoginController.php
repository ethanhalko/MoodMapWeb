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
		echo "outside";
		if (Auth::attempt(array( 'username' => $username, 'password' => Input::get('password')))) {
			echo "inside";
			$uid = User::where('username', '=', $username)->firstOrFail();
			Session::put('uid', $uid);
			$moods = RecordedMood::where('uid', '=', $uid)->get();
			return Redirect::action('HomeController@index', array('moods'=>$moods));
		}
		//return View::make('partials.main', ['moods'=>"Login unsuccessful"]);		
	}
	public function logout(){
		Auth::logout();
		Session::forget('uid');
		return View::make('partials.login');
	}


}
