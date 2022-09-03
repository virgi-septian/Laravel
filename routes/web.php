<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
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

Route::get('/home', function () {
    return view('home', [
        "title" => "Home",
    ]
    );
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Virgi Septian",
        "kelas" => "XII RPL 3",
        "email" => "virgiseptian77@gmail.com",
        "img" => "virgiseptian.jpg",
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/categories', [CategoryController::class, 'index']);

// Halaman singel post
// Mengambil slug
Route::get('/post/{post:slug}', [PostController::class, 'show']);
Route::get('/categories/{category:slug}', [CategoryController::class, 'show']);
Route::get('/authors/{author:username}', [AuthorController::class, 'show']);
Route::get('/authors', [AuthorController::class, 'index']);