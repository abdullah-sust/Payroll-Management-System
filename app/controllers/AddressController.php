<?php

class AddressController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /address
	 *
	 * @return Response
	 */
	public function index()
	{
		$addresses = Address::all();
		return View::make('address.index')
						->with('title','All Employee Address')
						->with('addresses',$addresses);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /address/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$users = User::lists('employeeID','id');
		return View::make('address.create')
						->with('users',$users)
						->with('title','Employee\'s Address');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /address
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = [
			'user_id' => 'required',
			'street' => 'required',
			'postal_code' => 'required',
			'police_station' => 'required',
			'city' => 'required',
			'country' => 'required'
		];

		$data = Input::all();

		$validator = Validator::make($data,$rules);

		if($validator->fails())
		{
			return Redirect::back()->withInput()->withErrors($validator);
		}

		if(Address::where('user_id', $data['user_id'])->exists()) {
			return Redirect::back()->withErrors('Address Already Exists for this user');
		}
		
		$address = new Address();
		$address->user_id = $data['user_id'];
		$address->street = $data['street'];
		$address->postal_code = $data['postal_code'];
		$address->police_station = $data['police_station'];
		$address->city = $data['city'];
		$address->country = $data['country'];

		if($address->save())
		{
			return Redirect::route('address.index')->with('success',"Employee's History Added Successfully");
		}
		else
		{
			return Redirect::route('address.index')->with('error',"Something went wrong.Try again");
		}
	}

	/**
	 * Display the specified resource.
	 * GET /address/{id}
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
	 * GET /address/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		try{
		$address = Address::find($id);

		return View::make('address.edit')
						->with('title','Update Address of ')
						->with('address',$address);
		}
		catch(Exception $ex){
			return Redirect::route('address.index')->with('error','Something went wrong.Try Again.');
		}
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /address/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = [
			'street' => 'required',
			'postal_code' => 'required',
			'police_station' => 'required',
			'city' => 'required',
			'country' => 'required'
		];

		$data = Input::all();

		$validator = Validator::make($data,$rules);

		if($validator->fails())
		{
			return Redirect::back()->withInput()->withErrors($validator);
		}
		

		$address = Address::find($id);
		$address->street = $data['street'];
		$address->postal_code = $data['postal_code'];
		$address->police_station = $data['police_station'];
		$address->city = $data['city'];
		$address->country = $data['country'];

		if($address->save())
		{
			return Redirect::route('address.index')->with('success',"Employee's Address Edited Successfully");
		}
		else
		{
			return Redirect::route('address.index')->with('error',"Something went wrong.Try again");
		}

	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /address/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
