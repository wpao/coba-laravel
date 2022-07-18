@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }}</h1>

            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my posts</a>
            <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Delete</a>

            {{-- img-fluid = supaya responsife --}}
            {{-- <img src="..." alt="{{ $post->category->name }}" class="img-fluid"> --}}
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">

            {{-- my = jarak atas bawah. fs = font size --}}
            <article class="my-3 fs-5">
                <p>{!! $post->body !!}</p>
            </article>
            <a href="/blog" class="d-block mt-3">Back to Posts</a>
        </div>
    </div>
</div>


@endsection
