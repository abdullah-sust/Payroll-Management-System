<?php

class RewardController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /reward
	 *
	 * @return Response
	 */
	public function index()
	{
		$reward = Reward::all(); 
		return View::make('reward.index')
						->with('title', 'All Rewards')
						->with('rewards', $reward);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /reward/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$users = User::lists('employeeID', 'id');
		return View::make('reward.create')
						->with('title', 'Attach a Reward/Fine')
						->with('userId', $users);
	}

	/**
	 * Store Renewly created resource in storage.
	 * POST /reward
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = [

					'user_id'      => 'required',
					'fine'         => 'required|numeric',
					'extra_pay'    => 'required|numeric'
		];

		$data = Input::all();

		$validator = Validator::make($data,$rules);

		if($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);
		}
		if(Reward::where('user_id', $data['user_id'])->exists()) {
			return Redirect::back()->withInput()->withErrors('This Employee is already attached Reward or Fine.If you want to change, hit edit button');
		}

		$reward = new Reward();
		$reward->user_id = $data['user_id'];
		$reward->fine = $data['fine'];
		$reward->extra_pay = $data['extra_pay'];

		if($reward->save()){
			return Redirect::route('reward.index')->with('success',"New Reward Attached Successfully");
		} else {
			return Redirect::route('reward.index')->with('error',"Something went wrong.Try again");
		}
	}

	/**
	 * Display the specified resource.
	 * GET /reward/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /reward/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		try{
			$reward = Reward::findOrFail($id);
			return View::make('reward.edit')
						->with('reward',$reward)
						->with('title','Edit Reward Name');
		}catch(Exception $ex){
			return Redirect::route('reward.index')->with('error','Something went wrong.Try Again.');
		}
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /reward/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
		$rules = [
					'fine'         => 'required|numeric',
					'extra_pay'    => 'required|numeric'
				];

		$data = Input::all();

		$validator = Validator::make($data,$rules);

		if($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$reward = Reward::find($id);
		$reward->user_id = $data['user_id'];
		$reward->fine = $data['fine'];
		$reward->extra_pay = $data['extra_pay'];
		if($reward->save()){
			return Redirect::route('reward.index')->with('success',"Reward/Fine Updated Successfully");
		} else {
			return Redirect::route('reward.index')->with('error',"Something went wrong.Try again");
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /reward/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		try{
			Reward::destroy($id);

			return Redirect::route('reward.index')->with('success','Reward Deleted Successfully.');

		}catch(Exception $ex){
			return Redirect::route('reward.index')->with('error','Something went wrong.Try Again.');
		}
	}

}