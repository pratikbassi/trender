<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function GuzzleHttp\json_encode;

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
    $datacollection = [
        "labels"=>["2020-05-27","2020-05-28","2020-05-29","2020-05-30"],
        "datasets"=>[
            ["label"=>"trump@cnn.com","data"=>["59","43","46","13"],"fill"=>false,"borderColor"=>"rgba(141, 107, 148, 1)"],
            ["label"=>"trump@bbc.com","data"=>["20","24","30","15"],"fill"=>false,"borderColor"=>"rgba(207, 92, 54, 1)"],
            ["label"=>"biden@cnn.com","data"=>["11","13","8","4"],"fill"=>false,"borderColor"=>"rgba(153, 57, 85, 1)"],
            ["label"=>"biden@bbc.com","data"=>["2","2","1","1"],"fill"=>false,"borderColor"=>"rgba(33, 160, 160, 1)"]
        ],
        "options"=> [
            'responsive'=> false,
            'maintainAspectRatio'=> false,

            ]
        ];





    return view('welcome', ['graph_data' => json_encode($datacollection)]);
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
