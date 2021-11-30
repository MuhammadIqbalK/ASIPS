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

route::get('/Login','App\Http\Controllers\LoginController@index');
Route::post('/Login','App\Http\Controllers\LoginController@authenticate');

Route::get('/register', function () {
    return view('register');   
});
Route::post('/register', function () {
    return view('register');   
});
//tablebalita
route::get('/balita','App\Http\Controllers\balitaController@index');
Route::get('/balitacreate','App\Http\Controllers\balitaController@create');

route::get('/destroybalita/{id}','App\Http\Controllers\balitaController@destroy');

//tablekecamatan
route::get('/kecamatan','App\Http\Controllers\kecamatanController@index');
Route::get('/inputkecamatan','App\Http\Controllers\kecamatanController@store');
Route::post('/kecamatancreate','App\Http\Controllers\kecamatanController@create');

route::get('/destroykecamatan/{id}','App\Http\Controllers\kecamatanController@destroy');



//tablekelurahan
route::get('/kelurahan','App\Http\Controllers\kelurahanController@index');
Route::get('/inputkelurahan','App\Http\Controllers\kelurahanController@store');
Route::post('/kelurahancreate','App\Http\Controllers\kelurahanController@create');

route::get('/destroykelurahan/{id}','App\Http\Controllers\kelurahanController@destroy');
