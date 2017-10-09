<?php

use App\User;
use App\Http\Controllers\{
    TaskController, UserController
};

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
Route::auth();
Route::get('/index', 'TaskController@index');
Route::get('/' , 'TaskController@role');
Route::get('task{id}', 'TaskController@TaskId')->name('TaskId');
Route::get('/add', 'TaskController@add');
Route::post('/pageadd','TaskController@create')->name('createTask');
Route::get('/getEdit', 'TaskController@edit');
Route::delete('/task/{task}', 'TaskController@destroy');
Route::post('/task/postEdit', 'TaskController@edit');
Route::post('/task/done', 'TaskController@done');
Route::post('/set', 'TaskController@set');

//Route::get('/home_admin', 'HomeController@home');
//Route::get('/home_user', 'HomeController@home');
//Route::get('/task_user', 'TaskController@store');
//Route::get('/edit', 'TaskController@edit');
//Route::delete('/task/{task}', 'TaskController@destroy');
//Route::post('/task/add', 'TaskController@add');
//Route::post('/task/edit', 'TaskController@edit');      
//   
//Route::get('/home', 'HomeController@index');

