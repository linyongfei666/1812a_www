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
    echo date("Y-m-d,h:i:s");
    return view('welcome');
});
Route::any('/add','TestController@add');
Route::any('/redis','TestController@redisTest');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');