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

Route::get('data_santri', 'DataController@index')->name('data_santri');

Route::get('data_santri/input', 'DataController@tambah')->name('tambah_data');

Route::get('data_santri/list/{id_lembaga}', 'DataController@list')->name('list_data');

Route::get('data_santri/list_absen/{id_lembaga}', 'DataController@list_absen')->name('list_absen');

Route::get('data_santri/list_group', 'DataController@list_group')->name('list_group');

Route::get('data_santri/list_all', 'DataController@list_all')->name('list_all');

Route::get('data_santri/list_lembaga', 'DataController@list_lembaga')->name('list_lembaga');

Route::get('data_santri/list_grpabsen', 'DataController@list_grpabsen')->name('list_grpabsen');

Route::get('data_santri/master_biaya', 'DataController@master_biaya')->name('master_biaya');

Route::get('data_santri/rekapitulasi_biaya', 'DataController@rekapitulasi_biaya')->name('rekapitulasi_biaya');

Route::post('data_santri/insert', 'DataController@insert' );

Route::post('data_santri/insert_biaya', 'DataController@insert_biaya' );

Route::post('data_santri/insert_lembaga', 'DataController@insert_lembaga' );

Route::post('data_santri/update', 'DataController@update' );

Route::post('data_santri/update_absen', 'DataController@update_absen' );

Route::post('data_santri/update_biaya', 'DataController@update_biaya' );

Route::post('data_santri/update_pembayaran', 'DataController@update_pembayaran' );

Route::post('data_santri/update_lembaga', 'DataController@update_lembaga' );

Route::get('data_santri/edit/{id_santri}', 'DataController@edit')->name('edit_data');

Route::get('data_santri/edit_biaya/{id_biaya}', 'DataController@edit_biaya')->name('edit_biaya');

Route::get('data_santri/edit_lembaga/{id_lembaga}', 'DataController@edit_lembaga')->name('edit_lembaga');

Route::get('data_santri/edit_absen/{id_absen}', 'DataController@edit_absen')->name('edit_absen');

Route::get('data_santri/edit_user/{id}', 'DataController@edit_user')->name('edit_user');

Route::get('data_santri/profil/{id_santri}', 'DataController@profil')->name('profil_santri');

Route::get('data_santri/delete/{id_santri}', 'DataController@delete');

Route::get('data_santri/delete_biaya/{id_biaya}', 'DataController@delete_biaya');

Route::get('data_santri/delete_lembaga/{induk_lembaga}', 'DataController@delete_lembaga');

Route::get('data_santri/delete_user/{id}', 'DataController@delete_user');

Route::get('data_santri/reset_absen/{id_lembaga}', 'DataController@reset_absen');

Route::get('data_santri/export_excel/{id_lembaga}', 'DataController@export_excel')->name('export_excel');

Route::get('data_santri/export_absen/{id_lembaga}', 'DataController@export_absen')->name('export_absen');

Route::get('data_santri/export_view', 'DataController@export_view')->name('export_view');

Route::post('data_santri/import_excel', 'DataController@import_excel')->name('import_excel');

Route::get('data_santri/tambah_biaya', 'DataController@tambah_biaya')->name('tambah_biaya');

Route::get('data_santri/tambah_biaya2', 'DataController@tambah_biaya2')->name('tambah_biaya2');

Route::get('data_santri/get_biaya/{id_santri}', 'DataController@get_biaya')->name('get_biaya');

Route::get('data_santri/get_biaya2/{id_santri}', 'DataController@get_biaya2')->name('get_biaya2');

Route::get('data_santri/get_pembayaran/{id_santri}', 'DataController@get_pembayaran')->name('get_pembayaran');

Route::post('data_santri/update_getbiaya', 'DataController@update_getbiaya')->name('update_getbiaya');

Route::post('data_santri/add_user', 'DataController@add_user')->name('add_user');

Route::get('data_santri/list_user', 'DataController@list_user')->name('list_user');

Route::post('data_santri/update_user', 'DataController@update_user')->name('update_user');

Route::post('data_santri/update_kategori', 'DataController@update_kategori')->name('update_kategori');

Route::get('data_santri/mass_updatejenis', 'DataController@mass_updatejenis')->name('mass_updatejenis');

Route::get('data_santri/mass_insertkat', 'DataController@mass_insertkat')->name('mass_insertkat');

Route::get('data_santri/update_sb/{id}', 'DataController@update_sb');

Route::get('data_santri/update_sl/{id}', 'DataController@update_sl');

Route::post('data_santri/insert_kat', 'DataController@insert_kat')->name('insert_kat');

Auth::routes();

// Route::get('/home', 'DataController@index')->name('home');
