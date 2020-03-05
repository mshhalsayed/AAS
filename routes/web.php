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

 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
 
Route::get('/ticket', 'ticketController@index');
Route::post('/ticket', 'ticketController@stor')->name('ticket');

// how to dip table in html
//how to ins to database from html
//how to login and remov reg ....... diaple