<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryControler extends Controller
{
    public function show(Category $category)
    {
        return view('category',[
            'title' => '',
        ]);
    }
}
