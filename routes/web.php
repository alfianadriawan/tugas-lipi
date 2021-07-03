<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard','DashboardController@index');
    
    Route::get('/keltian','KeltianController@index');
    Route::post('/keltian/create','KeltianController@create');
    Route::get('/keltian/{id}/edit','KeltianController@edit');
    Route::post('/keltian/{id}/update','KeltianController@update');
    Route::get('/keltian/{id}/delete','KeltianController@delete');
    
    Route::get('/artikel','ArtikelController@index');
});

