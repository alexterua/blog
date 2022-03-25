<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes(['verify' => true]);

// Home Page
Route::get('/home', ['App\Http\Controllers\HomeController', 'index'])->name('home');


// Main Routes
Route::namespace('\App\Http\Controllers\Main')->group(function () {
    Route::get('/', 'IndexController')->name('main.index');
});


// Admin Routes
Route::namespace('\App\Http\Controllers\Admin')->prefix('admin')->middleware(['auth', 'admin', 'verified'])->group(function () {

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

    // Admin\Tags
    Route::namespace('Tag')->prefix('tags')->group(function () {
        Route::get('/', 'IndexController')->name('admin.tag.index');
        Route::get('/create', 'CreateController')->name('admin.tag.create');
        Route::post('/', 'StoreController')->name('admin.tag.store');
        Route::get('/{tag}', 'ShowController')->name('admin.tag.show');
        Route::get('/{tag}/edit', 'EditController')->name('admin.tag.edit');
        Route::patch('/{tag}', 'UpdateController')->name('admin.tag.update');
        Route::delete('/{tag}', 'DestroyController')->name('admin.tag.destroy');
    });

    // Admin\Posts
    Route::namespace('Post')->prefix('posts')->group(function () {
        Route::get('/', 'IndexController')->name('admin.post.index');
        Route::get('/create', 'CreateController')->name('admin.post.create');
        Route::post('/', 'StoreController')->name('admin.post.store');
        Route::get('/{post}', 'ShowController')->name('admin.post.show');
        Route::get('/{post}/edit', 'EditController')->name('admin.post.edit');
        Route::patch('/{post}', 'UpdateController')->name('admin.post.update');
        Route::delete('/{post}', 'DestroyController')->name('admin.post.destroy');
    });

    // Admin\Users
    Route::namespace('User')->prefix('users')->group(function () {
        Route::get('/', 'IndexController')->name('admin.user.index');
        Route::get('/create', 'CreateController')->name('admin.user.create');
        Route::post('/', 'StoreController')->name('admin.user.store');
        Route::get('/{user}', 'ShowController')->name('admin.user.show');
        Route::get('/{user}/edit', 'EditController')->name('admin.user.edit');
        Route::patch('/{user}', 'UpdateController')->name('admin.user.update');
        Route::delete('/{user}', 'DestroyController')->name('admin.user.destroy');
    });
});


// User Profile
Route::namespace('\App\Http\Controllers\Profile')->prefix('profile')->middleware(['auth', 'verified'])->group(function () {

    // Profile\Main
    Route::namespace('Main')->group(function () {
        Route::get('/', 'IndexController')->name('profile.main.index');
    });

    // Profile\Liked
    Route::namespace('Like')->prefix('liked')->group(function () {
        Route::get('/', 'IndexController')->name('profile.liked.index');
        Route::delete('/{post}', 'DestroyController')->name('profile.liked.destroy');
    });

    // Profile\Comment
    Route::namespace('Comment')->prefix('comment')->group(function () {
        Route::get('/', 'IndexController')->name('profile.comment.index');
        Route::get('/{comment}/edit', 'EditController')->name('profile.comment.edit');
        Route::patch('/{comment}', 'UpdateController')->name('profile.comment.update');
        Route::delete('/{comment}', 'DestroyController')->name('profile.comment.destroy');
    });

});
