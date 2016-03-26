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
		$status = [

			'0' => 'Not Paid',
			'1' => 'Paid',
			];
		$data = History::all();
		return View::make('history.index')
					->with('title','Employee Payment History & Status')
					->with('histories',$data)
					->with('status', $status);
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

			'1' => 'January',
			'2' => 'February',
			'3' => 'March',
			'4' => 'April',
			'5' => 'May',
			'6' => 'June',
			'7' => 'July',
			'8' => 'August',
			'9' => 'September',
			'10' => 'October',
			'11' => 'November',
			'12' => 'December'
			

		];
		return View::make('history.create')
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
		//
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