<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories', [
            'title' => 'Categories Post',
            'categories' => Category::all(),
        ]);
    }

    public function show(Category $category)
    {
        return view('category', [
            'title' => $category->name,
            'posts' => $category->posts,
            'category' => $category->name,
        ]);
    }
}
