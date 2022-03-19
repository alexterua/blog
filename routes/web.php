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
Route::namespace('\App\Http\Controllers\Admin')->prefix('admin')->group(function () {
    // Admin\Main
    Route::namespace('Main')->group(function () {
        Route::get('/', 'IndexController')->name('admin.main.index');
    });
    // Admin\Categories
    Route::namespace('Category')->prefix('categories')->group(function () {
        Route::get('/', 'IndexController')->name('admin.category.index');
        Route::get('/create', 'CreateController')->name('admin.category.create');
        Route::post('/', 'StoreController')->name('admin.category.store');
        Route::get('/{category}', 'ShowController')->name('admin.category.show');
        Route::get('/{category}/edit', 'EditController')->name('admin.category.edit');
        Route::patch('/{category}', 'UpdateController')->name('admin.category.update');
        Route::delete('/{category}', 'DestroyController')->name('admin.category.destroy');
    });

});
