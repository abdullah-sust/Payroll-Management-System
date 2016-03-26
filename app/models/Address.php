<?php

class Address extends \Eloquent {
	protected $fillable = [];
	protected $table = 'address';

	public function user() {
		return $this->belongsTo('User', 'user_id', 'id');
	}
}