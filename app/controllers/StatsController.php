<?php

class StatsController extends \BaseController {


	public function index()
	{
		$uid = Session::get('uid')->uid;
		$moods = RecordedMood::where('uid', '=', $uid)->get();

		foreach( $moods as $mood ){
			$moodNames[] = $mood->mood;
		}
		// return array_count_values($moodNames);
		return View::make('partials.statistics', ['moodNames'=>json_encode(array_count_values($moodNames))]);
	}
}
