<?php

use App\Http\Controllers\HomeController;
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

Auth::routes();

// Home Page
Route::get('/home', ['App\Http\Controllers\HomeController', 'index'])->name('home');


// Main Routes (Front)
Route::namespace('\App\Http\Controllers\Main')->group(function () {
    Route::get('/', 'IndexController')->name('main.index');
});


// Admin Routes (Back)
Route::namespace('\App\Http\Controllers\Admin')->prefix('layouts')->group(function () {
    Route::namespace('Main')->group(function () {
        Route::get('/', 'IndexController')->name('layouts.main.index');
    });
});
