<?php

class SalaryController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /salary
	 *
	 * @return Response
	 */
	public function index()
	{
		$salary = SalaryRank::all(); 
		return View::make('salary.index')
						->with('title', 'All Salary')
						->with('salary', $salary);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /salary/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$users = User::lists('employeeID', 'id');
		return View::make('salary.create')
						->with('title', 'Create New Salary')
						->with('userId', $users);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /salary
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = [

					'user_id'      => 'required',
					'rank'         => 'required|numeric',
					'basic_salary' => 'required|numeric',
					'bonus'        => 'required|numeric'
		];


		$data = Input::all();

		$validator = Validator::make($data,$rules);

		if($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);
		}

		if(SalaryRank::where('user_id', $data['user_id'])->exists()) {
			return Redirect::back()->withInput()->withErrors('This Employee is already assigned Basic & Bonus');
		}


		$salary = new SalaryRank();
		$salary->user_id= $data['user_id'];
		$salary->rank = $data['rank'];
		$salary->basic= $data['basic_salary'];
		$salary->bonus = $data['bonus'];
		
		
		if($salary->save()){
			return Redirect::route('salary.index')->with('success',"Salary Added Successfully");
		} else {
			return Redirect::route('salary.index')->with('error',"Something went wrong.Try again");
		}
		
	}

	/**
	 * Display the specified resource.
	 * GET /salary/{id}
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
	 * GET /salary/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		try{
			$salary = SalaryRank::findOrFail($id);
			return View::make('salary.edit')
						->with('salary',$salary )
						->with('title','Edit Salary Status');
		}catch(Exception $ex){
			return Redirect::route('salary.index')->with('error','Something went wrong.Try Again.');
		}
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /salary/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = [
					'rank'      => 'required',
					'basic'     => 'required',
					'bonus'     => 'required'
				];

		$data = Input::all();

		$validator = Validator::make($data,$rules);

		if($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$salary = SalaryRank::find($id);
		$salary->rank = $data['rank'];
		$salary->basic = $data['basic'];
		$salary->bonus = $data['bonus'];

		if($salary->save()){
			return Redirect::route('salary.index')->with('success',"Salary Updated Successfully");
		} else {
			return Redirect::route('salary.index')->with('error',"Something went wrong.Try again");
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /salary/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		try{
			SalaryRank::destroy($id);

			return Redirect::route('salary.index')->with('success','Designation Deleted Successfully.');

		}catch(Exception $ex){
			return Redirect::route('salary.index')->with('error','Something went wrong.Try Again.');
		}
	}

}