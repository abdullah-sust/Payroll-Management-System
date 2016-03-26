<?php

class CompanyController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /company
	 *
	 * @return Response
	 */
	public function index()
	{

		$companyinfos = CompanyProfile::all();
		return View::make('company.index')
						->with('title','All Employees Company Info')
						->with('companyinfos',$companyinfos);

	}

	/**
	 * Show the form for creating a new resource.
	 * GET /company/create
	 *
	 * @return Response
	 */
	public function create()
	{

		$users = User::lists('employeeID','id');
		$ranks = SalaryRank::lists('rank', 'id');
		$desigs = Designation::lists('name', 'id');
		return View::make('company.create')
						->with('title', 'Create New Company Info')
						->with('users', $users)
						->with('ranks',$ranks)
						->with('desigs',$desigs);

	}

	/**
	 * Store a newly created resource in storage.
	 * POST /company
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = [


					'user_id'        => 'required',
					'rank'        => 'required',
					'designation_id' => 'required',
					'join_date'      => 'required'
					
		];

		$data = Input::all();

		$validator = Validator::make($data,$rules);

		if($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);
		}
		if(CompanyProfile::where('user_id', $data['user_id'])->exists()) {
			return Redirect::back()->withInput()->withErrors('This Employee is already assigned Rank & Designation');
		}
		$companyinfo = new CompanyProfile();
		$companyinfo->user_id = $data['user_id'];
		$companyinfo->rank_id = $data['rank'];
		$companyinfo->join_date = $data['join_date'];
		$companyinfo->designation_id = $data['designation_id'];
		$companyinfo->contribution = $data['contribution'];

		if($companyinfo->save()){
			return Redirect::route('companyinfo.index')->with('success',"New Company Info Added Successfully");
		} else {
			return Redirect::route('companyinfo.index')->with('error',"Something went wrong.Try again");
		}

	}

	/**
	 * Display the specified resource.
	 * GET /company/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		;
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /company/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		try{
			$companyinfo = CompanyProfile::findOrFail($id);
			$ranks = SalaryRank::lists('rank', 'id');
		    $desigs = Designation::lists('name', 'id');
			return View::make('company.edit')
						->with('companyinfo',$companyinfo)
						->with('ranks',$ranks)
						->with('desigs',$desigs)
						->with('title','Edit Company Info of');
		}catch(Exception $ex){
			return Redirect::route('companyinfo.index')->with('error','Something went wrong.Try Again.!!');
		}
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /company/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = [
					'rank_id'      => 'required',
					'designation_id'     => 'required',
					'join_date'  =>  'required',
					'contribution'     => 'required'
				];

		$data = Input::all();
		$validator = Validator::make($data,$rules);

		if($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$companyinfo = CompanyProfile::find($id);
		$companyinfo->rank_id = $data['rank_id'];
		$companyinfo->designation_id = $data['designation_id'];
		$companyinfo->join_date = $data['join_date'];
		$companyinfo->contribution = $data['contribution'];

		if($companyinfo->save()){
			return Redirect::route('companyinfo.index')->with('success',"Company Info Updated Successfully");
		} else {
			return Redirect::route('companyinfo.index')->with('error',"Something went wrong.Try again");
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /company/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		try{
			CompanyProfile::destroy($id);

			return Redirect::route('companyinfo.index')->with('success','Company Info  Deleted Successfully.');

		}catch(Exception $ex){
			return Redirect::route('companyinfo.index')->with('error','Something went wrong.Try Again.');
		}
	}

}