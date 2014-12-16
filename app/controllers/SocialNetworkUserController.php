<?php

class SocialNetworkUserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	public function dummy_index()
	{
		return View::make('dummy_index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$params = json_decode(Request::get('user'));
        $user = SocialNetworkUser::create([
				'first_name' => $params->{'First Name'},
                'second_name' => $params->{'Last Name'},
                'age' => $params->{'Age'},
                'date_of_birth' => $params->{'Date of Birth'}
			]);
        // Validation and Filtering is sorely needed!!
        // Seriously, I'm a bad person for leaving that out.
     
     	
        return Response::json(array(
            'error' => false,
            'id' => $user->toArray()['id']),
            200
        );
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
		$user = SocialNetworkUser::find($id);
		 return Response::json(array(
            'error' => false,
            'user' => $user->toArray()),
            200
        );
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
