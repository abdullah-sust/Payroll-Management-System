<?php

class Reward extends \Eloquent {
	protected $fillable = [];
	protected $table = 'reward';

	public function user() {
		return $this->belongsTo('User', 'user_id', 'id');
	}
}