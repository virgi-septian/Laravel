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

Route::get('/posts', function () {
    return view('posts');
});

// Mengirim data ke views dengan array
Route::get('/about', function () {
    return view('about', [
        "nama" => "Virgi Septian",
        "kelas" => "XII RPL 3",
        "email" => "virgiseptian77@gmail.com",
        "img" => "virgiseptian.jpg",
    ]);
});