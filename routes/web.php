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
    return view('welcome');
});

Route::get('/locations', function () {
    return view('locations');
});

Route::get('/careers', function () {
    return view('careers');
});

Route::get('/low-fee-title-company', function () {
    return view('whyus');
});
Route::get('/wire-fraud-warning', function () {
    return view('fraud');
});

// creates all routes to CRUD methods in PostsController
//Route::resource('posts','PostsController');
// use blog in url rather than posts
Route::resource('/blog','PostsController');
Route::get('/dashboard/blogs', 'PostsController@admin_index');
Route::get('/blog/{id}/{slug}', 'PostsController@show');

/* Authentication and Admin */
Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/dashboard', 'DashboardController@index');
Route::get('/dashboard/{id}/edit-profile', 'DashboardController@edit');
Route::get('/dashboard/{id}/activity-log', 'DashboardController@activity_log');
Route::post('/dashboard/{id}', 'DashboardController@update');

Route::get('/contact-us', 'ContactController@create')->name('contact.create');
Route::post('/contact-us', 'ContactController@store')->name('contact.store');
