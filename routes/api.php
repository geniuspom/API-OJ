<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('login','ApiController@accessToken');

Route::post('register', ['as' => 'register', 'uses' => 'Users\RegisterController@index']);

Route::group(['namespace' => 'Users', 'prefix' => 'users', 'middleware' => ['web', 'auth:api']] , function(){
	
	Route::get('/', ['as' => 'user', 'uses' => 'UserController@index']);
	
});
