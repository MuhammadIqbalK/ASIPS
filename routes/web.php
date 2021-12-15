<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\kelurahanController;

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



Route::get('/Home', function () {return view('Home');})->middleware('auth');


//login
route::get('/login','App\Http\Controllers\LoginController@index')->middleware('guest');
Route::post('/login','App\Http\Controllers\LoginController@authenticate');
Route::get('/logout','App\Http\Controllers\LoginController@logout');

//register
route::get('/register','App\Http\Controllers\RegisterController@index');
Route::post('/register','App\Http\Controllers\RegisterController@store');


//tablekecamatan
route::get('/kecamatan','App\Http\Controllers\kecamatanController@index')->middleware('sadmin');
Route::get('/inputkecamatan','App\Http\Controllers\kecamatanController@store');
Route::post('/kecamatancreate','App\Http\Controllers\kecamatanController@create');
Route::get('/kecamatanedit/{id}','App\Http\Controllers\kecamatanController@edit');
Route::post('/kecamatanupdate/{id}','App\Http\Controllers\kecamatanController@update');
route::get('/destroykecamatan/{id}','App\Http\Controllers\kecamatanController@destroy');


//tablekelurahan
route::get('/kelurahan','App\Http\Controllers\kelurahanController@index')->middleware('sadmin');
Route::get('/inputkelurahan','App\Http\Controllers\kelurahanController@store');
Route::post('/kelurahancreate','App\Http\Controllers\kelurahanController@create');
Route::get('/kelurahanedit/{id}','App\Http\Controllers\kelurahanController@edit');
Route::post('/kelurahanupdate/{id}','App\Http\Controllers\kelurahanController@update');
route::get('/destroykelurahan/{id}','App\Http\Controllers\kelurahanController@destroy');

//tableposyandu
route::get('/posyandu','App\Http\Controllers\posyanduController@index')->middleware('sadmin');
Route::get('/inputbalita','App\Http\Controllers\balitaController@store');
Route::get('/balitacreate','App\Http\Controllers\balitaController@create');
Route::get('/balitaedit/{id}','App\Http\Controllers\balitaController@edit');
Route::post('/balitaupdate/{id}','App\Http\Controllers\balitaController@update');
route::get('/destroybalita/{id}','App\Http\Controllers\balitaController@destroy');


//tablerole
route::get('/balita','App\Http\Controllers\balitaController@index')->middleware('sadmin');
Route::get('/inputbalita','App\Http\Controllers\balitaController@store');
Route::get('/balitacreate','App\Http\Controllers\balitaController@create');
Route::get('/balitaedit/{id}','App\Http\Controllers\balitaController@edit');
Route::post('/balitaupdate/{id}','App\Http\Controllers\balitaController@update');
route::get('/destroybalita/{id}','App\Http\Controllers\balitaController@destroy');



//tablebalita
route::get('/balita','App\Http\Controllers\balitaController@index');
Route::get('/inputbalita','App\Http\Controllers\balitaController@store');
Route::get('/balitacreate','App\Http\Controllers\balitaController@create');
Route::get('/balitaedit/{id}','App\Http\Controllers\balitaController@edit');
Route::post('/balitaupdate/{id}','App\Http\Controllers\balitaController@update');
route::get('/destroybalita/{id}','App\Http\Controllers\balitaController@destroy');


//tablehistory
route::get('/history','App\Http\Controllers\history_posyanduController@index');
Route::get('/inputbalita','App\Http\Controllers\balitaController@store');
Route::get('/balitacreate','App\Http\Controllers\balitaController@create');
Route::get('/balitaedit/{id}','App\Http\Controllers\balitaController@edit');
Route::post('/balitaupdate/{id}','App\Http\Controllers\balitaController@update');
route::get('/destroybalita/{id}','App\Http\Controllers\balitaController@destroy');

