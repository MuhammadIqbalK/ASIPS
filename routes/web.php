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
    return view('Home');

    
});

route::get('/balita','App\Http\Controllers\balitaController@index');
route::get('/destroybalita/{id}','App\Http\Controllers\balitaController@destroy');
// Route::get('/Home', function () {
//     return view('Home');

    
// });

