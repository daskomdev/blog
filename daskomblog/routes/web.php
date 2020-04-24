<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    $currentUser = Auth::guard('web')->user();
    return Inertia::render('Home', [
        'currentUser' => $currentUser
    ]); 
});

Route::get('/login', function () {
    return Inertia::render('Login', [
    ]); 
})->middleware('guest');

Route::get('/asisten', function () {
    $currentUser = Auth::guard('web')->user();
    return Inertia::render('Asisten', [
        'currentUser' => $currentUser
    ]); 
});

Route::get('/artikel/baru', function () {
    $currentUser = Auth::guard('web')->user();
    return Inertia::render('NewArticle', [
        'currentUser' => $currentUser
    ]); 
});

Route::get('/artikel/{slug}', function () {
    $currentUser = Auth::guard('web')->user();
    return Inertia::render('Article', [
        'currentUser' => $currentUser
    ]); 
});

// Authentication Handler
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::get('/logout/{currentPage}', 'Auth\LoginController@logout')->name('logout');

// Aritcle Handler
Route::post('/fetchArticles', 'ArticleController@index')->name('fetchArticles');