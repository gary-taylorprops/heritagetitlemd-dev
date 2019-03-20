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

Route::get('//low-fee-title-company', function () {
    return view('whyus');
});
