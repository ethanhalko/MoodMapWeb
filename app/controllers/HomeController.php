<?php

class HomeController extends BaseController {

	public function index(){
		//$moods = RecordedMood::get();
		//if not logged in return login/register else return standard index. 
		if( Auth::check() ){
			$uid = Session::get('uid')->uid;
			$moods = RecordedMood::where('uid', '=', $uid)->get();
			return View::make('partials.main', ['moods'=>$moods]);
		}
		else{
			return View::make('partials.login');
		}

	}
	public function addMood(){
		$mood = Input::get('mood');
		if( !is_null($mood) ){
			RecordedMood::create([
			'mood'=>$mood,
			'uid'=>Session::get('uid')->uid,
			'entrydate'=>DB::raw('now()'),
			]);
		}else{
			return View::make('partials.main', ['error'=>"No mood entered"]);
		}
		$uid = Session::get('uid')->uid;

		$moods = RecordedMood::where('uid', '=', $uid)->get();
		return View::make('partials.main', ['moods'=>$moods]);
	}
}
