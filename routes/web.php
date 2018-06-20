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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@namen');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::post('voegtoe', '\App\Http\Controllers\DataController@voegtoe');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'DataController@gegevens');
