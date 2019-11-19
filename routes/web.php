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



//Route::get('/contact', function () {
//    return view('contact.create');
//});




Route::get('/', function () {
    return view('auth.login');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/skill', function () {
    return view('skill');
});

Route::get('/experience', function () {
    return view('experience');
});

Route::get('/education', function () {
    return view('education');
});

Route::resource('blog','BlogController');


Route::resource('contact','ContactController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
