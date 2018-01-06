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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/give', 'HomeController@give')->name('give');
Route::post('/give/step2', 'HomeController@giveStep2')->name('give.step2');
Route::post('/give/step3', 'HomeController@spisok')->name('give.step3');
Route::post('/give/step3/queue', 'HomeController@store');
Route::get('/pages/queue', 'HomeController@spisok2')->name('pages.queue');
