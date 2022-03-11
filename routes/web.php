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

//BOOKS ROUTES

Route::get('/elenco-libri','BooksController@index')->name('elenco-libri');
Route::get('{id}/dettagli-libro','BooksController@show')->name('dettagli-libro');

