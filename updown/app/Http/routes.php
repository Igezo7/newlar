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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/down','FuncController@download');

Route::get('/up', function () {
    return view('upload');
});

Route::post('/upload', 'FuncController@upload');

Route::get('/up',function (){
    return view('upload');
});

/*Route::get('/down',function(){
    return response()->download('../storage/app/public/test.txt',,);
});