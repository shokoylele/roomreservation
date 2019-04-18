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


Route::get('/room/display', 'RoomController@index')->name('roomdisplay'); //Display all rooms
Route::get('/room/add', 'RoomController@create')->name('addroom'); //Display form to add room
Route::post('/room/add', 'RoomController@store')->name('processaddroom'); //Process ng form to add room