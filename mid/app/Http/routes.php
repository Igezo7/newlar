<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', ['middleware' => 'check', function () {
//    return view('login');
//}]);

Route::auth();

Route::resource('try','TryController');

Route::get('/info', function(){
	return view('user.info');
});

Route::get('/', function(){
	return view('form');
});

Route::put('/info', 'CheckController@put');

Route::post('/info', 'CheckController@post');