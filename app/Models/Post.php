<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'body']; //yang boleh diisi
    protected $guarded = ['id']; //yang tidak boleh di isi

    /**
     * Post dapat memiliki satu category
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Post dapat memiliki satu user
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
