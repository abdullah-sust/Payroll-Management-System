<?php

class Designation extends \Eloquent {
	protected $fillable = [];
	protected $table = 'designation';

	public function companyprofile() {
		return $this->hasMany('CompanyProfile', 'designation_id', 'id');
	}
}