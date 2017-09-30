<?php

use App\User;
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
//
//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/index', 'TaskController@index');
Route::get('/', function (User $user) {
    if ($user->role == 'student') {
	return view('home_usr');
    } else {
	return view('home_adm');
    }
});
Route::auth();

Route::get('/taskid', 'TaskController@TaskId');

Route::get('/getEdit', 'TaskController@edit');
Route::delete('/task/{task}', 'TaskController@destroy');
Route::post('/task/add', 'TaskController@add');
Route::post('/task/postEdit', 'TaskController@edit');
Route::post('/task/done', 'TaskController@done');




//Route::get('/home_admin', 'HomeController@home');
//Route::get('/home_user', 'HomeController@home');
//Route::get('/task_user', 'TaskController@store');
//Route::get('/edit', 'TaskController@edit');
//Route::delete('/task/{task}', 'TaskController@destroy');
//Route::post('/task/add', 'TaskController@add');
//Route::post('/task/edit', 'TaskController@edit');      
//   
//Route::get('/home', 'HomeController@index');
Route::auth();

