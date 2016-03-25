<?php

class History extends \Eloquent {
	protected $fillable = [];
	protected $table = 'payment_history';

	public function user() {
		return $this->belongsTo('User', 'user_id', 'id');
	}
}