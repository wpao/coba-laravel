@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $post->title }}</h1>

            <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

            {{-- img-fluid = supaya responsife --}}
            {{-- <img src="..." alt="{{ $post->category->name }}" class="img-fluid"> --}}
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">

            {{-- my = jarak atas bawah. fs = font size --}}
            <article class="my-3 fs-5">
                <p>{!! $post->body !!}</p>
            </article>
            <a href="/blog" class="d-block mt-3">Back to Posts</a>
        </div>
    </div>
</div>


@endsection
