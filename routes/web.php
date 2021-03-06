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


Route::group(['middle' => 'web'], function () {
    Route::get('/home', 'HomeController@index');
    Route::get('/home', 'HomeController@index')->name('home');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
});

Route::group(['prefix' => 'klant', 'namespace' => 'Auth', 'as' => 'panel.'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/order', 'HomeController@index')->name('order');
    Route::get('/order', 'HomeController@index')->name('home');
});

