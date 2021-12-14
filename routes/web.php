<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('landingpage.landingpage');
});

Route::get('/paduan', function () {
    return view('home1');
});



Route::get('/Home', function () {return view('Home');
    
})->middleware('auth');


//login
route::get('/login','App\Http\Controllers\LoginController@index')->middleware('guest');
Route::post('/login','App\Http\Controllers\LoginController@authenticate');
Route::get('/logout','App\Http\Controllers\LoginController@logout');

//register
route::get('/register','App\Http\Controllers\RegisterController@index');
Route::post('/register','App\Http\Controllers\RegisterController@store');

//tablebalita
route::get('/balita','App\Http\Controllers\balitaController@index');
Route::get('/balitacreate','App\Http\Controllers\balitaController@create');

route::get('/destroybalita/{id}','App\Http\Controllers\balitaController@destroy');

//tablekecamatan
route::get('/kecamatan','App\Http\Controllers\kecamatanController@index');
Route::get('/inputkecamatan','App\Http\Controllers\kecamatanController@store');
Route::post('/kecamatancreate','App\Http\Controllers\kecamatanController@create');
Route::get('/kecamatanedit/{id}','App\Http\Controllers\kecamatanController@edit');
Route::post('/kecamatanupdate/{id}','App\Http\Controllers\kecamatanController@update');
route::get('/destroykecamatan/{id}','App\Http\Controllers\kecamatanController@destroy');



//tablekelurahan
route::get('/kelurahan','App\Http\Controllers\kelurahanController@index');
Route::get('/inputkelurahan','App\Http\Controllers\kelurahanController@store');
Route::post('/kelurahancreate','App\Http\Controllers\kelurahanController@create');
Route::get('/kelurahanedit/{id}','App\Http\Controllers\kelurahanController@edit');
Route::post('/kelurahanupdate/{id}','App\Http\Controllers\kelurahanController@update');
route::get('/destroykelurahan/{id}','App\Http\Controllers\kelurahanController@destroy');
