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
// pages
Route::get('/', 'PrivyController@index');
Route::get('/home', 'PrivyController@index')->name('home');

Route::get('/tentangkami',   'PrivyController@tentangKami')->name('tentangkami');

Route::get('/dokumentasiapi', 'PrivyController@dokumentasiAPI')->name('dokumentasiapi');

Route::get('/verifikasipdf', 'PrivyController@verifikasiPDF')->name('verifikasipdf');

Route::get('/kontakbisnis', 'KontakController@index')->name('kontakbisnis');
Route::post('/kontakbisnis', 'KontakController@store');

Route::get('/faq', 'PrivyController@faq')->name('faq');
Route::get('/faq/search', 'PrivyController@search');

Route::get('/bantuan', 'PrivyController@bantuan')->name('bantuan');

// auth
Route::get('/login', 'AuthController@login')->name('login');
Route::get('/register', 'AuthController@register')->name('register');
Route::get('/forgot', 'AuthController@forgot')->name('forgot');

// enterprise
Route::get('/enterprise', 'EnterpriseController@index')->name('enterprise');