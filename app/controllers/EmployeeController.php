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
		return View::make('employee.index')
						->with('title', 'List of All Employees');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /employee/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('employee.add')
						->with('title', 'Add an Employee')
						->with('status', 'jj');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /employee
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
		//
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
		//
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