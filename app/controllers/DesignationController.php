<?php

class DesignationController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /designation
	 *
	 * @return Response
	 */
	public function index()
	{
		$Designations = Designation::all(); 
		return View::make('designation.index')
						->with('title', 'All Designations')
						->with('designations', $Designations);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /designation/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('designation.create')
						->with('title', 'Create New Designation');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /designation
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = [

					'name'      => 'required',
					
		];

		$data = Input::all();

		$validator = Validator::make($data,$rules);

		if($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$desig = new Designation();
		$desig->name = $data['name'];

		if($desig->save()){
			return Redirect::route('designation.index')->with('success',"New Designation Added Successfully");
		} else {
			return Redirect::route('designation.index')->with('error',"Something went wrong.Try again");
		}
		
	}

	/**
	 * Display the specified resource.
	 * GET /designation/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /designation/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		try{
			$designation= Designation::findOrFail($id);
			return View::make('designation.edit')
						->with('designation',$designation)
						->with('title','Edit Designation Name');
		}catch(Exception $ex){
			return Redirect::route('designation.index')->with('error','Something went wrong.Try Again.');
		}
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /designation/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = [
					'name'      => 'required',		
				];

		$data = Input::all();

		$validator = Validator::make($data,$rules);

		if($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$desig = Designation::find($id);
		$desig->name = $data['name'];

		if($desig->save()){
			return Redirect::route('designation.index')->with('success',"Designation Updated Successfully");
		} else {
			return Redirect::route('designation.index')->with('error',"Something went wrong.Try again");
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /designation/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		try{
			Designation::destroy($id);

			return Redirect::route('designation.index')->with('success','Designation Deleted Successfully.');

		}catch(Exception $ex){
			return Redirect::route('designation.index')->with('error','Something went wrong.Try Again.');
		}
	}

}