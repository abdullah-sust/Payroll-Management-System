<?php

class HistoryController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /history
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = History::all();
		return View::make('history.index')
					->with('title','Employee History')
					->with('historys',$data);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /history/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$month = [

			'January' => 'January',
			'February' => 'February',
			'March' => 'March',
			'April' => 'April',
			'May' => 'May',
			'June' => 'June',
			'July' => 'July',
			'August' => 'August',
			'September' => 'September',
			'October' => 'October',
			'November' => 'November',
			'December' => 'December'
		];
		$users = User::lists('email','id');
		return View::make('history.create')
					->with('userID',$users)
					->with('title','Employee Payment')
					->with('month',$month);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /history
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = [

			'user_id' => 'required',
			'year'    => 'required',
			'month'   => 'required',
		];

		$data = Input::all();
		$validator = Validator::make($data,$rules);

		if($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$history = new History();
		$history->user_id = $data['user_id'];
		$history->year = $data['year'];
		$history->month = $data['month'];
		$history->status ='Paid';
		$history->salary = 12345;

		if($history->save()){
			return Redirect::route('history.index');//->with('success',"Employee's History Added Successfully");
		} else {
			return Redirect::route('history.index');//->with('error',"Something went wrong.Try again");
		}
	}

	/**
	 * Display the specified resource.
	 * GET /history/{id}
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
	 * GET /history/{id}/edit
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
	 * PUT /history/{id}
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
	 * DELETE /history/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}