<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "Posts",
            // "posts" => Post::all()
            "posts" => Post::latest()->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "single post",
            "post" => $post
        ]);
    }
}