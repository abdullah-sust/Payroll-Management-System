<?php

class Designation extends \Eloquent {
	protected $fillable = [];
	protected $table = 'designation';

	public function company_profile() {
		return $this->hasMany('SalaryRank', 'rank_id', 'id');
	}
}