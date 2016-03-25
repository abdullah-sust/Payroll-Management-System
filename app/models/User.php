<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Zizaco\Entrust\HasRole;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait, HasRole;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	protected $guarded = [];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function profile() {
		return $this->hasOne('Profile', 'user_id', 'id');
	}

	public function company_profile() {
		return $this->hasOne('\CompanyProfile', 'user_id', 'id');
	}

	public function reward() {
		return $this->hasOne('Reward', 'user_id', 'id');
	}

	public function salaryrank() {
		return $this->hasOne('SalaryRank', 'user_id', 'id');
	}

	public function history() {
		return $this->hasMany('History', 'user_id', 'id');
	}

	public function address() {
		return $this->hasMany('Address', 'user_id', 'id');
	}


}
