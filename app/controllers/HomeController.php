<?php

class HomeController extends \BaseController {
	protected $layout = 'layouts.index';
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if(Auth::guest()){
			return Redirect::to('/');
	   	}
	   		$data = array();
				$data['topArtist'] = Feed::topArtist();
				$data['projects'] = Feed::projects();
				$data['oneproject'] = NULL;
				$this->layout->title = null;
	   		$this->layout->content = View::make('welcome',$data);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		if(Auth::guest()){
			return Redirect::to('/');
	   	}
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		if(Auth::guest()){
			return Redirect::to('/');
			}
				$data = array();
				$data['topArtist'] = Feed::topArtist();
				$data['projects'] = Feed::projects();
				$data['oneproject'] = Feed::oneproject($id);
				$this->layout->title = null;
				$this->layout->content = View::make('welcome',$data);
	}


	/**
	 * Show the form for editing the specified resource.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
