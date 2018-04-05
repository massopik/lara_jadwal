<?php

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


Route::auth();
Route::get('/home', 'HomeController@index');
//************DOSEN*************/
Route::get('/dosen', 'dosenController@index')->name('dosen.index');
Route::get('/dosen/create', 'dosenController@create')->name('dosen.create');
Route::post('/dosen/create','dosenController@store');
Route::get('/dosen/{dosen}/edit', 'dosenController@edit')->name('dosen.edit');
Route::patch('/dosen/{dosen}/edit', 'dosenController@update')->name('dosen.update');
Route::delete('/dosen/{dosen}/delete', 'dosenController@destroy')->name('dosen.destroy');

//************matkul*************/
Route::get('/matkul', 'matkulController@index')->name('matkul.index');
Route::get('/matkul/create', 'matkulController@create')->name('matkul.create');
Route::post('/matkul/create','matkulController@store');
Route::get('/matkul/{matkul}/edit', 'matkulController@edit')->name('matkul.edit');
Route::patch('/matkul/{matkul}/edit', 'matkulController@update')->name('matkul.update');
Route::delete('/matkul/{matkul}/delete', 'matkulController@destroy')->name('matkul.destroy');

//************ruangan*************/
Route::get('/ruangan', 'ruanganController@index')->name('ruangan.index');
Route::get('/ruangan/create', 'ruanganController@create')->name('ruangan.create');
Route::post('/ruangan/create','ruanganController@store');
Route::get('/ruangan/{ruangan}/edit', 'ruanganController@edit')->name('ruangan.edit');
Route::patch('/ruangan/{ruangan}/edit', 'ruanganController@update')->name('ruangan.update');
Route::delete('/ruangan/{ruangan}/delete', 'ruanganController@destroy')->name('ruangan.destroy');

//************jadwal*************/
Route::get('/jadwal', 'jadwalController@index')->name('jadwal.index');
Route::get('/jadwal/create', 'jadwalController@create')->name('jadwal.create');
Route::post('/jadwal/create','jadwalController@store');