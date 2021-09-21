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

// route Navigasi
Route::get('/', 'NavController@home');
Route::get('/source_kode', 'NavController@source_kode');
Route::get('/artikel', 'NavController@artikel');
Route::get('/project', 'NavController@project');
Route::get('/tentang', 'NavController@tentang');
