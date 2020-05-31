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

Auth::routes();

Route::get('/home', 'Chart@index')->name('home');

Route::get("/about", function () {
    return view('about');
});

Route::get('/new', 'Chart@create')->name('create');
Route::post('/new', 'Chart@insert')->name('insert');
Route::get('/graph/{id}', 'Chart@show');
Route::get('/destroy/{id}', 'Chart@destroy');
