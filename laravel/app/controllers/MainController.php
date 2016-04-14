<?php

class MainController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $story = "";
        $query = DB::table('posts')->where('id', 0)->first();
        if($query != NULL){
            $story = $query;
        }
		return View::make('main/create')->with('posts', $story);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('main/create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{   
        $toAdd = "";
        $temp = "";
		$append = Input::get('post');
        $story = DB::table('posts')->where('id', 0)->first();
        if(!$story == NULL){
            //handle regular input
            $toAdd = $story . ' ' . $append;
        }else{
            //handle first input
            $toAdd = $append;
            DB::table('posts')->insert(array('content'=>$toAdd));
            return View::make('main/create')->with('posts', $toAdd);
        }
        die("not null");
        DB::table('posts')->where('id', 0)->update(array('content'=>$toAdd));
        return View::make('main/create')->with('posts', $toAdd);
        /*
            {{ HTML::style('css/main.css') }}
    <link href='https://fonts.googleapis.com/css?family=Montserrat|Lora|Tangerine' rel='stylesheet' type='text/css'>
        */
	}


	/**
	 * Display the specified resource.
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
