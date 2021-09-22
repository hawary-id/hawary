<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// route Navigasi
Route::get('/', 'NavController@home')->name('navhome');
Route::get('/source_kode', 'NavController@source_kode')->name('navsource');
Route::get('/artikel', 'NavController@artikel')->name('navartikel');
Route::get('/freelance', 'NavController@freelance')->name('navfreelance');
Route::get('/project', 'NavController@project')->name('navproject');
Route::get('/tentang', 'NavController@tentang')->name('navtentang');
