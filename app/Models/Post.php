<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => 'judul-post-pertama',
            "author" => "Virgi Septian",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, deleniti ducimus et aut error libero tenetur.
                Reiciendis molestias repudiandae consequuntur quae! Illum cumque ipsa rerum!Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Reiciendis nisi odit perferendis consequuntur debitis maiores dolore quasi ex porro dolor?Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Reiciendis nisi odit perferendis consequuntur debitis maiores dolore quasi ex porro dolor?",
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => 'judul-post-kedua',
            "author" => "Rohesa Sidiq Pratama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Reiciendis nisi odit perferendis consequuntur debitis maiores dolore quasi ex porro dolor?Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Reiciendis nisi odit perferendis consequuntur debitis maiores dolore quasi ex porro dolor?Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Reiciendis nisi odit perferendis consequuntur debitis maiores dolore quasi ex porro dolor?",
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}