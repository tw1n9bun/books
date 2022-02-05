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




Route::get('/', 'App\Http\Controllers\MainController@home');

Route::get('/about', 'App\Http\Controllers\MainController@about');

Route::get('/review', 'App\Http\Controllers\MainController@review')->name('review');

Route::get('/register/all/{id}', 'App\Http\Controllers\MainController@review_one')->name('register_one');

Route::post('/review/check', 'App\Http\Controllers\MainController@review_check');

Route::get('/news', 'App\Http\Controllers\MainController@news');

Route::get('/news', 'App\Http\Controllers\MainController@news');



//Route::get('/user/{id}/{name}', function ($id, $name) {
//    return "ID:". $id.".Name: ".$name;
//});
