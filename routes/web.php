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

Route::get('/profile', 'ProfileController@index');
Route::patch('/profile/updateGenres', 'ProfileController@updateGenres');
Route::get('/profile/myReviews', 'ProfileController@myReviews');
Route::get('/profile/myReviews/{review}', 'ProfileController@clickedReview');
Route::patch('/profile/myReviews/{review}/update', 'ProfileController@updateReview');
Route::delete('/profile/myReviews/{review}/delete', 'ProfileController@deleteReview');
<<<<<<< HEAD
Route::get('/profile/SuggestedBooks', 'ProfileController@suggestedBooks');
Route::get('/home/TopBooks', 'HomeController@TopBooks');
=======

// //Route::resource('Review/{$id}/delete','ReviewController@destroy');
// //Route::get('Review/{$id}/delete','ReviewController@destroy');
// /*
// Route::patch('Review/{$id}/delete','ReviewController@destroy');
// Route::delete('Review/{$id}/delete','ReviewController@destroy');
// */
// Route::resource('Review','ReviewController');
>>>>>>> 3136ba8b2a2cf5f82e1f3bbc3078b77aa9167e26
