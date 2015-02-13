<?php

class ConfSessionController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /confsession.php
	 *
	 * @return Response
	 */
	public function index()
	{
		$activities = ConfSession::all();
		return View::make('app/activity-selection')->with('activity', $activities);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /confsession.php/create
	 *
	 * @return Response
	 */
	public static function saveActivitySelection(){

		$activitySelectionDetails = array(
			'user_name' => Input::get('user_name'),
			'user_store' => Input::get('user_store'),
			'activity' => Input::get('activity')
		);

		$activitySelection = ActivitySelection::create($activitySelectionDetails);
		$activitySelection->save();

		return Redirect::to('/app/activity-selection-done');

	}

	/**
	 * Store a newly created resource in storage.
	 * POST /confsession.php
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /confsession.php/{id}
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
	 * GET /confsession.php/{id}/edit
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
	 * PUT /confsession.php/{id}
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
	 * DELETE /confsession.php/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
