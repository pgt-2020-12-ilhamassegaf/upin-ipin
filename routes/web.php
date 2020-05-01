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

Route::get('/dashboard', 'HomeController@template')->name('dashboard');
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/dashboard', 'MahasiswaController@index')->name('dashboard');
Route::get('/dashboard/tambah', 'MahasiswaController@tambah');
Route::post('/dashboard/store', 'MahasiswaController@store');
Route::get('/dashboard/edit/{id}', 'MahasiswaController@edit');
Route::post('/dashboard/update', 'MahasiswaController@update');
Route::get('/dashboard/hapus/{id}','MahasiswaController@hapus'); 


Route::get('/dosen', 'DosenController@index')->name('dosen');
Route::get('/dosen/tambahdosen', 'DosenController@tambah');
Route::post('/dosen/store', 'DosenController@store');
Route::get('/dosen/editdosen/{id}', 'DosenController@edit');
Route::post('/dosen/update', 'DosenController@update');
Route::get('/dosen/hapus/{id}','DosenController@hapus');


Route::get('/nilai', 'NilaiController@index')->name('nilai');
Route::get('/nilai/tambahnilai', 'NilaiController@tambah');
Route::post('/nilai/store', 'NilaiController@store');
Route::get('/nilai/editnilai/{id}', 'NilaiController@edit');
Route::post('/nilai/update', 'NilaiController@update');
Route::get('/nilai/hapus/{id}','NilaiController@hapus');


Route::get('/matakuliah', 'MatakuliahController@index')->name('matakuliah');
Route::get('/matakuliah/tambahmatakuliah', 'MatakuliahController@tambah');
Route::post('/matakuliah/store', 'MatakuliahController@store');
Route::get('/matakuliah/editmatakuliah/{id}', 'MatakuliahController@edit');
Route::post('/matakuliah/update', 'MatakuliahController@update');
Route::get('/matakuliah/hapus/{id}','MatakuliahController@hapus');


Route::get('/users', 'UsersController@index')->name('Users');
Route::get('/users/tambahusers', 'UsersController@tambah');
Route::post('/users/store', 'UsersController@store');
Route::get('/users/editusers/{id}', 'UsersController@edit');
Route::post('/users/update', 'UsersController@update');
Route::get('/users/hapus/{id}','UsersController@hapus');