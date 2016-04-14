<?php

class MainController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $story = array();
        $query = DB::table('posts')->get();
        if($query != NULL){
            foreach($query as $q){
                array_push($story, $q->content);
            }
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
        $toAdd = array();
		$append = Input::get('post');
        $story = DB::table('posts')->get();
        if(!$story == NULL){
            foreach($story as $s){
                array_push($toAdd, $s->content);
            }
        }
        if($append != NULL){
            array_push($toAdd, $append);
            DB::table('posts')->insert(array('content'=>$append));            
        }
        return Redirect::to('main');
        
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
