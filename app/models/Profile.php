<?php

class Profile extends \Eloquent {
	protected $fillable = [];

	public function user() {
		return $this->belongsTo('User', 'user_id', 'id');
	}

	public static function random() {
		$value =  mt_rand(100100,109999);
		return $value;
	}

	public static function rand_uniq() {
		$value = Profile::random();
		if(Profile::randExist($value)) {
			return rand_uniq();
		}
		return $value;
	}

	public static function randExist($value){
		return User::where('employeeID', $value)->exists();
	}
}