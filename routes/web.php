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
    return view('dashboard');
});

Route::get('/datajemaat','DatajemaatController@index')->name('datajemaat');
Route::get('/ibadahpelkat','IbadahpelkatController@index')->name('ibadahpelkat');
Route::get('/ibadahminggu','IbadahmingguController@index')->name('ibadahminggu');
Route::get('/kebaktian','KebaktianController@index')->name('kebaktian');
Route::get('/kegiatan','KegiatanController@index')->name('kegiatan');
Route::get('/hut','HutController@index')->name('hut');
Route::get('/penerimaan','PenerimaanController@index')->name('penerimaan');
Route::get('/pengeluaran','PengeluaranController@index')->name('pengeluaran');
Route::get('/pembinaan','PembinaanController@index')->name('pembinaan');
Route::get('/laporantransaksi','TransaksiController@index')->name('laporantransaksi');
Route::get('/absensi','AbsensiController@index')->name('absensi');
Route::get('/offlinetransaksi','OfflinetransaksiController@index')->name('offlinetransaksi');
Route::get('/pelayananpribadi','PelayananpribadiController@index')->name('pelayananpribadi');

Route::resource('/datajemaat','DatajemaatController');
Route::resource('/ibadahpelkat','IbadahpelkatController');
Route::resource('/ibadahminggu','IbadahmingguController');
Route::resource('/kebaktian','KebaktianController');
Route::resource('/kegiatan','KegiatanController');
Route::resource('/hut','HutController');
Route::resource('/penerimaan','PenerimaanController');
Route::resource('/pengeluaran','PengeluaranController');
Route::resource('/pembinaan','PembinaanController');
Route::resource('/transaksi','TransaksiController');
Route::resource('/absensi','AbsensiController');
Route::resource('/offlinetransaksi','OfflinetransaksiController');
Route::resource('/pelayananpribadi','PelayananpribadiController');


//Route::get('/welcome', 'welcome')->name('');//

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Front
Route::get('/ibadahhariminggu','Front\IbadahharimingguController@index')->name('ibadahhariminggu.index');
Route::post('/ibadahhariminggu','Front\IbadahharimingguController@index')->name('ibadahhariminggu.index');

Route::get('/jadwalpelkat','Front\JadwalpelkatController@index')->name('jadwalpelkat.index');
Route::post('/jadwalpelkat','Front\JadwalpelkatController@index')->name('jadwalpelkat.index');

Route::get('/jadwalkebaktian','Front\JadwalkebaktianController@index')->name('jadwalkebaktian.index');
Route::post('/jadwalkebaktian','Front\JadwalkebaktianController@index')->name('jadwalkebaktian.index');

Route::get('/agenda','Front\AgendaController@index')->name('agenda.index');
Route::post('/agenda','Front\AgendaController@index')->name('agenda.index');

Route::get('/ultah','Front\UltahController@index')->name('ultah.index');
Route::post('/ultah','Front\UltahController@index')->name('ultah.index');

Route::get('/petugas','Front\PetugasController@index')->name('petugas.index');
Route::post('/petugas','Front\PetugasController@index')->name('petugas.index');

Route::get('/detailtransaksi','Front\DetailtransaksiController@index')->name('front.transaksi.detail');
Route::post('/detailtransaksi','Front\DetailtransaksiController@index')->name('front.transaksi.detail');

Route::get('/donasi','TransaksiController@create')->name('transaksi.create');

Route::get('/income','Front\IncomeController@index')->name('income.index');
Route::post('/income','Front\IncomeController@index')->name('income.index');

Route::get('/outcome','Front\OutcomeController@index')->name('outcome.index');
Route::post('/outcome','Front\OutcomeController@index')->name('outcome.index');

Route::get('/detailabsensi','Front\DetailabsensiController@index')->name('front.absensi.detail');
Route::post('/detailabsensi','Front\DetailabsensiController@index')->name('front.absensi.detail');

Route::get('/detailpelayananpribadi','Front\DetailpelayananpribadiController@index')->name('front.pelayananpribadi.detail');
Route::post('/detailpelayananpribadi','Front\DetailpelayananpribadiController@index')->name('front.pelayananpribadi.detail');