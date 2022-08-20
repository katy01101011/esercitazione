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
    return view('prova');
});

Auth::routes();

Route::middleware('auth')
    ->namespace('Admin') // Cartella da creare per i controller
    ->name('admin')	// Nome della rotta
    ->prefix('admin') // Primo pezzettino dell'URL
    ->group(function() { // Inseriamo tutte le rotte
        Route::get('/', 'HomeController@index')->name('home');
    });