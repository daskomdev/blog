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
    return Inertia::render('Home', [
    ]); 
});

Route::get('/login', function () {
    return Inertia::render('Login', [
    ]); 
});

Route::get('/asisten', function () {
    return Inertia::render('Asisten', [
    ]); 
});

Route::get('/artikel/baru', function () {
    return Inertia::render('NewArticle', [
    ]); 
});

Route::get('/artikel/{slug}', function () {
    return Inertia::render('Article', [
    ]); 
});