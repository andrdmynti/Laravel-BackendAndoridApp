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

// Route::get('/', function () {
//     return view('login');
// });

Route::get('/', function () {
    return view('welcome');
});


Route::get('profile', function () {
    return view('index');
});

Route::get('awal', function () {
    return view('awal');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
