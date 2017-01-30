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
Route::get('/home', 'HomeController@index');
Route::get('/books', 'HomeController@books');
Route::get('/books/{book}', 'HomeController@clickedBook');
Route::post('/books/{book}/review', 'HomeController@addReview');
Route::get('/search', 'HomeController@search');
Route::post('/search/result', 'HomeController@result');
Route::get('/profile', 'ProfileController@index');
Route::patch('/profile/updateGenres', 'ProfileController@updateGenres');
Route::get('/profile/myReviews', 'ProfileController@myReviews');
Route::get('/profile/myReviews/{review}', 'ProfileController@clickedReview');
Route::patch('/profile/myReviews/{review}/update', 'ProfileController@updateReview');
Route::delete('/profile/myReviews/{review}/delete', 'ProfileController@deleteReview');
Route::get('/profile/SuggestedBooks', 'ProfileController@suggestedBooks');
Route::get('/home/TopBooks', 'HomeController@TopBooks');

