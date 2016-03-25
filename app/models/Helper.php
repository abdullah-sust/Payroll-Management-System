<?php

class Helper  {
	public static function calculation($id){
		$basic = SalaryRank::where('user_id', $id)->pluck('basic');
		$bonus = SalaryRank::where('user_id', $id)->pluck('bonus');
		$fine = Reward::where('user_id', $id)->pluck('fine');
		$extra = Reward::where('user_id', $id)->pluck('extra_pay');
		$salary = $basic + ($basic*$bonus/100) - $fine + $extra;
		return $salary;
	}
}