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
Route::get('logout', 'HomeController@logout');
Route::get('/home', 'HomeController@index');
//Route::resource('Review/{$id}/delete','ReviewController@destroy');
//Route::get('Review/{$id}/delete','ReviewController@destroy');
/*
Route::patch('Review/{$id}/delete','ReviewController@destroy');
Route::delete('Review/{$id}/delete','ReviewController@destroy');
*/
Route::resource('Review','ReviewController');
