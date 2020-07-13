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

//dashboard
Route::get('/','DashboardController@index');

//agama
Route::resource('agama', 'AgamaController');

//dokumen
Route::resource('dokumen','DokumenController');

//klasifikasi
Route::resource('klasifikasi', 'KlasifikasiController');

//kk
Route::resource('kartu-keluarga', 'KKController');