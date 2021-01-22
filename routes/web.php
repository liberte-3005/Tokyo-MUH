<?php

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

Route::get('/', function () {
    return view('tokyo');
});

Route::get('', 'PostsController@index');
Route::post('', 'PostsController@store');
Route::post('/{id}', 'PostsController@delete');
Route::get('/city/{cat_id}', 'PostsController@showCity');

Auth::routes();
Route::get('/', 'PostsController@index');


