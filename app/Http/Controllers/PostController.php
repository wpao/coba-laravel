<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }
        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }
        return view('posts', [
            "title" => "All Posts" . $title,
            "active" => "posts",
            // "posts" => Post::all()
            // "posts" => Post::latest()->get()
            // "posts" => Post::with(['author', 'category'])->latest()->get()
            // "posts" => Post::latest()->get()
            // "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->get()
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
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
