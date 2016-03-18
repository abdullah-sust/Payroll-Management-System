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
		$users = User::lists('email', 'id');
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
					'rank' => 'required|numeric',
					'basic_salary' => 'required|numeric',
					'bonus' => 'required|numeric'
		];


		$data = Input::all();

		$validator = Validator::make($data,$rules);

		if($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);
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
		//
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
		//
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
		//
	}

}