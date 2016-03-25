<?php

class SalaryRank extends \Eloquent {
	protected $fillable = [];
	protected $table = 'salary_rank';

	public function user() {
		return $this->belongsTo('User', 'user_id', 'id');
	}
}