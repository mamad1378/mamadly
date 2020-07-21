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
    return view('welcome');
});

Route::get('/login', function () {
    return view('signup/login');
});

Route::get('/register', function () {
    return view('signup/register');
});

Route::prefix('main')->group(function(){
Route::get('/','mainController@index');
Route::get('/test','mainController@test');
Route::get('/about','mainController@about');
Route::resource('/categries', 'categoryController');
});