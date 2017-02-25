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
Auth::routes();
Route::get('/home', 'PageController@home')->name('home');
Auth::routes();
Route::get('/welcome', 'PageController@welcome')->name('welcome');
Auth::routes();
Route::get('/support', 'PageController@support')->name('support');
Auth::routes();
Route::get('/about', 'PageController@about')->name('about');
Auth::routes();
Route::get('/contact', 'PageController@contact')->name('contact');
Auth::routes();
Route::get('/personalinfo', 'PageController@personalinfo')->name('personalinfo');
Auth::routes();
Route::get('/employee', 'PageController@employee')->name('employee');
Auth::routes();
