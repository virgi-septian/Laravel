<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('blog', [
            "title" => "Blog",
            // "posts" => Post::all(),
            // Mencari data dari yang paling baru
            "posts" => Post::latest()->get(),
        ]);
    }

    // Route Model Binding
    public function show(Post $post){
        return view('post', [
            'title' => 'Single Post',
            'post' => $post
        ]);
    }
}
