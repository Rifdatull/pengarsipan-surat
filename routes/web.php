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

Route::get('/suratmasuk', 'SuratmasukController@index');
Route::get('/suratmasuk/create', 'SuratmasukController@create');
Route::post('/suratmasuk/store', 'SuratmasukController@store');
Route::get('/suratmasuk/edit/{id}', 'SuratmasukController@edit');
Route::put('/suratmasuk/update/{id}', 'SuratmasukController@update');
Route::get('/suratmasuk/hapus/{id}', 'SuratmasukController@destroy');

Route::get('/beranda','BerandaController@index')->name('beranda');
Route::get('/suratmasuk','SuratmasukController@index')->name('suratmasuk');

Route::get('/suratkeluar', 'SuratkeluarController@index');
Route::get('/suratkeluar/create', 'SuratkeluarController@create');
Route::post('/suratkeluar/store', 'SuratkeluarController@store');
Route::get('/suratkeluar/edit/{id}', 'SuratkeluarController@edit');
Route::put('/suratkeluar/update/{id}', 'SuratkeluarController@update');
Route::get('/suratkeluar/hapus/{id}', 'SuratkeluarController@destroy');

Route::get('/beranda','BerandaController@index')->name('beranda');
Route::get('/suratkeluar','SuratkeluarController@index')->name('suratkeluar');

Route::get('/login', function() {
    return view('login.index');
})->name('login');

Route::post('postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('logout', 'LoginController@logout')->name('logout');

// Route::group(['middleware' => ['Auth']], function() {

    // Route::get('/beranda', 'BerandaController@index');

Route::get('/cetakmasuk','SuratmasukController@cetakMasuk')->name('cetakmasuk');
Route::get('/cetakkeluar','SuratkeluarController@cetakKeluar')->name('cetakkeluar');