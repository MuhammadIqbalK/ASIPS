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
//tablebalita
route::get('/balita','App\Http\Controllers\balitaController@index');
route::get('/destroybalita/{id}','App\Http\Controllers\balitaController@destroy');

//tablekecamatan
route::get('/kecamatan','App\Http\Controllers\kecamatanController@index');
route::get('/destroykecamatan/{id}','App\Http\Controllers\kecamatanController@destroy');

Route::get('/login', function () {
    return view('login');   
});

route::get('/kecamatan','App\Http\Controllers\kecamatanController@index');