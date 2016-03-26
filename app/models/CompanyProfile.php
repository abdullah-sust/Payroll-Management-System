<?php

class CompanyProfile extends \Eloquent {
	protected $fillable = [];
	protected $table = 'company_profile';

	public function user() {
		return $this->belongsTo('User', 'user_id', 'id');
	}

	public function designation() {
		return $this->belongsTo('Designation', 'designation_id', 'id');
	}

	public function rank() {
		return $this->belongsTo('SalaryRank', 'rank_id', 'id');
	}

}