<?php

class RepController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /reps
	 *
	 * @return Response
	 */
	public function index()
	{

		//return Rep::with('user')->get();
		return View::make('reps.index')
					->with('reps',Rep::with('user')->get())
					->with('title',"VIP Reps");
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /reps/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('reps.create')
					->with('title','Create VIP Rep');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /reps
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /reps/{id}
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
	 * GET /reps/{id}/edit
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
	 * PUT /reps/{id}
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
	 * DELETE /reps/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}