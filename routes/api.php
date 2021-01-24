<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', 'Api\UserController@login');
Route::post('register', 'Api\UserController@register');

// jembatan android laravel
Route::get('ibadahminggu', 'Api\IbadahmingguController@ibadahminggu');
Route::get('ibadahpelkat', 'Api\IbadahpelkatController@ibadahpelkat');
Route::get('kebaktian', 'Api\KebaktianController@kebaktian');
Route::get('kegiatan', 'Api\KegiatanController@kegiatan');
Route::get('hut', 'Api\HutController@hut');
Route::get('pembinaan', 'Api\PembinaanController@pembinaan');
Route::get('penerimaan', 'Api\PenerimaanController@penerimaan');
Route::get('pengeluaran', 'Api\PengeluaranController@pengeluaran');