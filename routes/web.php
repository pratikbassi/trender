<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function GuzzleHttp\json_encode;
use App\Http\Controllers\Chart;

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
    $admin = DB::table('users')
        ->first();
    $ids = DB::table('graphs')
        ->where('user_id','=',$admin->id)
        ->get();

    $id_string = "";

    foreach($ids as $graph){
        $id_string .= $graph->id;
        $id_string .= "+";
    }

    $id_string = substr($id_string, 0, strlen($id_string)-1 );

    $CHART = new Chart();

    $datacollection = $CHART->graph_data($id_string);

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
