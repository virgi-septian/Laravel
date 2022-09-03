<?php

namespace App\Http\Controllers;

use App\Models\User;

class AuthorController extends Controller
{
    public function index()
    {
        return view('authors', [
            "title" => "Authors",
            "authors" => User::latest()->get(),
        ]);
    }

    public function show(User $author)
    {
        return view('author', [
            "title" => "Author Posts",
            "posts" => $author->posts,
        ]);
    }
}