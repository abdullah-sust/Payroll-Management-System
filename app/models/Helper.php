<?php

class Helper  {
	public static function calculation($id){
		$rank = CompanyProfile::where('user_id', $id)->pluck('rank_id');
		$basic = SalaryRank::where('rank', $rank )->pluck('basic');
		$bonus = SalaryRank::where('rank', $rank )->pluck('bonus');
		$fine = Reward::where('user_id', $id)->pluck('fine');
		$extra = Reward::where('user_id', $id)->pluck('extra_pay');
		$salary = $basic + ($basic*$bonus/100) - $fine + $extra;
		return $salary;
	}
}