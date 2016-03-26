<?php

class Address extends \Eloquent {
	protected $fillable = [];

	public function user() {
		return $this->belongsTo('User', 'user_id', 'id');
	}
}