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

Route::get('/home', function () {
    return view('home', [
        "tittle" => "Home",
    ]
    );
});

Route::get('/posts', function () {

    $blog_posts = [
        [
            "tittle" => "Judul Post Pertama",
            "slug" => 'judul-post-pertama',
            "author" => "Virgi Septian",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, deleniti ducimus et aut error libero tenetur.
            Reiciendis molestias repudiandae consequuntur quae! Illum cumque ipsa rerum!Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Reiciendis nisi odit perferendis consequuntur debitis maiores dolore quasi ex porro dolor?Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Reiciendis nisi odit perferendis consequuntur debitis maiores dolore quasi ex porro dolor?",
        ],
        [
            "tittle" => "Judul Post Kedua",
            "slug" => 'judul-post-kedua',
            "author" => "Rohesa Sidiq Pratama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Reiciendis nisi odit perferendis consequuntur debitis maiores dolore quasi ex porro dolor?Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Reiciendis nisi odit perferendis consequuntur debitis maiores dolore quasi ex porro dolor?Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Reiciendis nisi odit perferendis consequuntur debitis maiores dolore quasi ex porro dolor?",
        ],
    ];
    return view('posts', [
        "tittle" => "Blog",
        "posts" => $blog_posts,
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        "nama" => "Virgi Septian",
        "kelas" => "XII RPL 3",
        "email" => "virgiseptian77@gmail.com",
        "img" => "virgiseptian.jpg",
    ]);
});

// Halaman singel post
Route::get('/post/{slug}', function ($slug) {
    $blog_posts = [
        [
            "tittle" => "Judul Post Pertama",
            "slug" => 'judul-post-pertama',
            "author" => "Virgi Septian",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, deleniti ducimus et aut error libero tenetur.
                Reiciendis molestias repudiandae consequuntur quae! Illum cumque ipsa rerum!Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Reiciendis nisi odit perferendis consequuntur debitis maiores dolore quasi ex porro dolor?Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Reiciendis nisi odit perferendis consequuntur debitis maiores dolore quasi ex porro dolor?",
        ],
        [
            "tittle" => "Judul Post Kedua",
            "slug" => 'judul-post-kedua',
            "author" => "Rohesa Sidiq Pratama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Reiciendis nisi odit perferendis consequuntur debitis maiores dolore quasi ex porro dolor?Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Reiciendis nisi odit perferendis consequuntur debitis maiores dolore quasi ex porro dolor?Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Reiciendis nisi odit perferendis consequuntur debitis maiores dolore quasi ex porro dolor?",
        ],
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post['slug'] == $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        'tittle' => 'Single Post',
        'post' => $new_post,
    ]);
});