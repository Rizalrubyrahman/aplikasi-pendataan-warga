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
Route::group(['middleware' => ['auth']], function () {
    //dashboard
    Route::get('/','DashboardController@index');

    //agama
    Route::resource('agama', 'AgamaController');
    Route::get('/agama/{agama}/hapus','AgamaController@delete');

    //klasifikasi
    Route::resource('klasifikasi', 'KlasifikasiController');
    Route::get('/klasifikasi/{klasifikasi}/hapus','KlasifikasiController@delete');

    //kk
    Route::resource('kartu-keluarga', 'KKController');
    Route::get('/kartu-keluarga/{kartuKeluarga}/hapus','KKController@delete');

    //penduduk
    Route::resource('penduduk', 'PendudukController');
    Route::get('/penduduk/{penduduk}/hapus','PendudukController@delete');

    //image
    Route::put('image/{id}/tambah-ktp','PendudukController@tambahKtp');
    Route::put('image/{id}/tambah-ijazah','PendudukController@tambahIjazah');
    Route::put('image/{id}/ktp','PendudukController@hapusKtp');
    Route::put('image/{id}/hapus-ijazah','PendudukController@hapusIjazah');

    //laporan
    //kartu kelauarga
    Route::get('/laporan/kartu-keluarga','LaporanController@kartuKeluarga');
    //route cetak laporan pdf kartu keluarga
    Route::get('/laporan/kartu-keluarga/pdf','LaporanController@kartuKeluargaPdf');

    //agama
    Route::get('/laporan/agama','LaporanController@agama');
    //route cetak laporan pdf agama
    Route::get('/laporan/agama/pdf','LaporanController@agamaPdf');

    //klasifikasi
    Route::get('/laporan/klasifikasi','LaporanController@klasifikasi');
    //route cetak laporan pdf kartu keluarga
    Route::get('/laporan/klasifikasi/pdf','LaporanController@klasifikasiPdf');
});


//login
Route::get('/login','AuthController@index')->name('login');
Route::post('/login','AuthController@cekLogin');
Route::get('/logout','AuthController@logout');