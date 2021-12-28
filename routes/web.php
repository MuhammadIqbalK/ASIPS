<?php

use App\Http\Controllers\balitaController;
use App\Http\Controllers\history_posyanduController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\kelurahanController;
use App\Http\Controllers\posyanduController;
use App\Http\Controllers\UsersController;

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



Route::get('/Home', function () {
    return view('Home');
})->middleware('auth');


//login
route::get('/login', 'App\Http\Controllers\LoginController@index')->middleware('guest');
Route::post('/login', 'App\Http\Controllers\LoginController@authenticate');
Route::get('/logout', 'App\Http\Controllers\LoginController@logout');

//register
route::get('/register', 'App\Http\Controllers\RegisterController@index');
Route::post('/register', 'App\Http\Controllers\RegisterController@store');


//tablekecamatan
route::get('/kecamatan', 'App\Http\Controllers\kecamatanController@index')->middleware('sadmin');
Route::get('/inputkecamatan', 'App\Http\Controllers\kecamatanController@store')->middleware('sadmin');
Route::post('/kecamatancreate', 'App\Http\Controllers\kecamatanController@create')->middleware('sadmin');
Route::get('/kecamatanedit/{id}', 'App\Http\Controllers\kecamatanController@edit')->middleware('sadmin');
Route::post('/kecamatanupdate/{id}', 'App\Http\Controllers\kecamatanController@update')->middleware('sadmin');
route::get('/destroykecamatan/{id}', 'App\Http\Controllers\kecamatanController@destroy')->middleware('sadmin');


//tablekelurahan
route::get('/kelurahan', 'App\Http\Controllers\kelurahanController@index')->middleware('sadmin');
Route::get('/inputkelurahan', 'App\Http\Controllers\kelurahanController@store')->middleware('sadmin');
Route::post('/kelurahancreate', 'App\Http\Controllers\kelurahanController@create')->middleware('sadmin');
Route::get('/kelurahanedit/{id}', 'App\Http\Controllers\kelurahanController@edit')->middleware('sadmin');
Route::post('/kelurahanupdate/{id}', 'App\Http\Controllers\kelurahanController@update')->middleware('sadmin');
route::get('/destroykelurahan/{id}', 'App\Http\Controllers\kelurahanController@destroy')->middleware('sadmin');

//tableposyandu
Route::resource('/posyandu', posyanduController::class)->middleware('sadmin');

//tableuser
Route::resource('/user', UsersController::class)->middleware('sadmin');

//tablebalita
Route::resource('/balita', balitaController::class)->middleware('admin');

//tablehistory
Route::get('/history', [history_posyanduController::class, 'index'])->middleware('auth');
Route::get('/history/create', [history_posyanduController::class, 'create'])->middleware('admin');
Route::post('/history', [history_posyanduController::class, 'store'])->middleware('admin');
Route::get('/history/{id}/edit', [history_posyanduController::class, 'edit'])->middleware('admin');
Route::patch('/history/{id}', [history_posyanduController::class, 'update'])->middleware('admin');
Route::delete('/history/{id}', [history_posyanduController::class, 'destroy'])->middleware('admin');

//tablerole
// route::get('/balita', 'App\Http\Controllers\balitaController@index');
// Route::get('/inputbalita', 'App\Http\Controllers\balitaController@store');
// Route::get('/balitacreate', 'App\Http\Controllers\balitaController@create');
// Route::get('/balitaedit/{id}', 'App\Http\Controllers\balitaController@edit');
// Route::post('/balitaupdate/{id}', 'App\Http\Controllers\balitaController@update');
// route::get('/destroybalita/{id}', 'App\Http\Controllers\balitaController@destroy');


//tablehistory
// route::get('/history', 'App\Http\Controllers\history_posyanduController@index');
// Route::get('/inputbalita', 'App\Http\Controllers\balitaController@store');
// Route::get('/balitacreate', 'App\Http\Controllers\balitaController@create');
// Route::get('/balitaedit/{id}', 'App\Http\Controllers\balitaController@edit');
// Route::post('/balitaupdate/{id}', 'App\Http\Controllers\balitaController@update');
// route::get('/destroybalita/{id}', 'App\Http\Controllers\balitaController@destroy');
