<?php

class Profile extends \Eloquent {
	protected $fillable = [];

	public function user() {
		return $this->belongsTo('User', 'user_id');
	}
}