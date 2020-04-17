<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Home Page
Route::get('/', 'AuthController@home');

// Login and Logout
Route::get('/login', ['middleware' => 'guest', 'uses' => 'AuthController@getLogin']);
Route::post('/login', ['middleware' => 'guest', 'uses' => 'AuthController@postLogin']);
Route::get('/logout', ['middleware' => 'auth', 'uses' => 'AuthController@logout']);

// Route::get('/','TaskController@getAll');
Route::get('/tasks', 'TaskController@getAll');
Route::post('/create', 'TaskController@create');
Route::delete('/delete/{id}','TaskController@delete');
Route::get('/update/{id}','TaskController@getOne');
Route::put('/update/{id}','TaskController@update');
