<?php

class CompanyProfile extends \Eloquent {
	protected $fillable = [];
	protected $table = 'company_profile';

	public function user() {
		return $this->belongsTo('User', 'user_id', 'id');
	}

	public function designation() {
		return $this->belongsTo('Designation', 'rank_id', 'id');
	}

}