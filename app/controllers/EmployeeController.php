<?php

class EmployeeController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /employee
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = Profile::all();
		return View::make('employee.index')
						->with('title', 'List of All Employees')
						->with('employees', $users);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /employee/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$bg = [ 
			'A+' => 'A+',
			 'B+' => 'B+',
			 'AB+' => 'AB+',
			 'O+' => 'O+',
			 'A-' => 'A-',
			 'B-' => 'B-',
			 'AB-' => 'AB-',
			 'O-' => 'O-'
		];
		return View::make('employee.add')
						->with('title', 'Add an Employee')
						->with('bg', $bg);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /employee
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = [

					'first_name'      => 'required',
					'last_name' => 'required',
					'nid' => 'required|numeric',
					'email' => 'required|email',
					'sex' => 'required',
					'blood_group' => 'required',
					'dob' => 'required',
					'contact' => 'required',
					'marital_status' => 'required'

		];

		$data = Input::all();

		$validator = Validator::make($data,$rules);

		if($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$img_link = 'uploads/default.jpg';


		if(Input::hasFile('img_link')) {
			$file = Input::file('img_link');

			$destination = public_path().'/uploads/photos/';
			$filename = time().'_'.$file->getClientOriginalName();
			$file->move($destination, $filename);
			$img_link = '/uploads/photos/'.$filename;
		}
		

		$user = new User();
		$user->email = $data['email'];
		$user->password = str_random(6);
		$user->employeeID = 1000;
		if($user->save()){
			$user_id = $user->id;
			$profile = new Profile();
			$profile->user_id = $user_id;
			$profile->first_name = $data['first_name'];
			$profile->last_name = $data['last_name'];
			$profile->national_id = $data['nid'];
			$profile->sex = $data['sex'];
			$profile->blood_group = $data['blood_group'];
			$profile->birth_date = $data['dob'];
			$profile->marital_status= $data['marital_status'];
			$profile->phone = $data['contact'];
			$profile->photo = $img_link;

			if($profile->save()){
				return Redirect::route('employee.index')->with('success',"New Employee Added Successfully");
			} else {
				return Redirect::route('employee.index')->with('error',"Something went wrong.Try again");
			}
		} else {
			return Redirect::route('employee.index')->with('error',"Something went wrong.Try again");
		}

		
	}

	/**
	 * Display the specified resource.
	 * GET /employee/{id}
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
	 * GET /employee/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		try{
			$employee = User::findOrFail($id);
			return View::make('employee.edit')
						->with('employee',$employee)
						->with('title','Edit Employee Name');
		}catch(Exception $ex){
		return Redirect::route('employee.index')->with('error','Something went wrong.Try Again.');
		}
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /employee/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = [
					'first_name'      => 'required',
					'last_name'       => 'required',
					'email'           => 'required',
					'nid'             => 'required',
					'dob'             => 'required',
					'sex'             => 'required',
					'marital_status'  => 'required',
					'contact'         => 'required'		
				];

		$data = Input::all();

		$validator = Validator::make($data,$rules);

		if($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$employee = User::find($id);
		$employee->first_name = $data['first_name'];
		$employee->last_name = $data['last_name'];
		$employee->national_id = $data['nid'];
		$employee->sex = $data['sex'];
		$employee->birth_date = $data['dob'];
		$employee->phone = $data['contact'];
		$employee->marital_status = $data['marital_status'];
		//$employee->photo = $data[''];
		//$employee->blood_group = $data[''];
		
		

		if($employee->save()){
			return Redirect::route('employee.index')->with('success',"Employee Updated Successfully");
		} else {
			return Redirect::route('employee.index')->with('error',"Something went wrong.Try again");
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /employee/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}