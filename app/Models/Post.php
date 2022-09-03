<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Data mana saja yang boleh diisi
    // protected $fillable = ['title', 'excerpt', 'body'];

    // Data yang tidak boleh diisi sisanya boleh
    protected $guarded = ['id'];

    public function category()
    {
        // satu post hanya boleh memilik satu category
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}