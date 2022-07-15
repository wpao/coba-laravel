<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "All Posts",
            "active" => "posts",
            // "posts" => Post::all()
            // "posts" => Post::latest()->get()
            // "posts" => Post::with(['author', 'category'])->latest()->get()
            // "posts" => Post::latest()->get()
            "posts" => Post::latest()->filter(request(['search']))->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "single post",
            "active" => "posts",
            "post" => $post
        ]);
    }
}
