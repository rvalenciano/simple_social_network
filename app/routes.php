<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', [
    'uses' => 'SocialNetworkUserController@dummy_index',
    'as' => 'home',
]);

// Route group for API versioning
Route::group(array('prefix' => 'api/v1'), function()
{
	Route::resource('users', 'SocialNetworkUserController');
    Route::resource('friend', 'FriendController');
    Route::post('users/friends/add/{uid1}/{uid2}', [
    'uses' => 'FriendController@add',
    ]);


});