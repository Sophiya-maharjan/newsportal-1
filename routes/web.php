<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'UserController@index');
Route::get('/addUser', 'UserController@create');
Route::post('/addUser', 'UserController@store');
Route::get('/editUser/{id}', 'UserController@edit');
Route::patch('/editUser/{id}', 'UserController@update');
Route::delete('/admin/{id}', 'UserController@destroy');
Route::get('/admin', 'UserController@show');

Route::get('/logout', function(){
	return view('welcome');
});
//Route::resource('user', 'UserController');


Route::get('/categoryEdit/{categorySlug}','CategoryController@edit');
Route::resource('category','CategoryController',['except' => ['edit']]);


