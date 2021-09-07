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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/comics', 'ProductController@comicsitem')->name('comics');
Route::get('/detail/{id}', 'ProductController@show')->name('dettaglio-comics');



Route::get('/movie', 'HomeController@movie')->name('movie');
Route::get('/tv', 'HomeController@tv')->name('tv');
Route::get('/games', 'HomeController@games')->name('games');
Route::get('/collectibles', 'HomeController@collectibles')->name('collectibles');
Route::get('/videos', 'HomeController@videos')->name('videos');
Route::get('/fans', 'HomeController@fans')->name('fans');
Route::get('/news', 'HomeController@news')->name('news');
Route::get('/shop', 'HomeController@shop')->name('shop');








