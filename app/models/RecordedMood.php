<?php

class RecordedMood extends Eloquent {

	public $timestamps = false;
	protected $fillable = ['uid', 'mood', 'entrydate'];
	protected $table = 'RecordedMoods';
	protected $primaryKey = 'recordedmoodid';

}
