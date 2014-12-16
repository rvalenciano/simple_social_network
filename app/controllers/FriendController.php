<?php

class FriendController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
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

	 public function add($uid1, $uid2)
	{
		//we get the first user
		$user = SocialNetworkUser::find($id_1);
		$friend = new Friend(array('friend_id' => $id_2));
		$friend = $user->friends()->save($friend);
        
        // Validation and Filtering is sorely needed!!
        // Seriously, I'm a bad person for leaving that out.
     
     	
        return Response::json(array(
            'error' => false,
            'id' => $user->toArray()['id']),
            200
        );
	}


}
