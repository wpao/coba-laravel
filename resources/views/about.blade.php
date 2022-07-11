@extends('layouts.main')

@section('container')
<h1>Halaman About</h1>
<p>{{ $name }}</p>
<p>{{ $email }}</p>
<img src="img/{{ $image }}" alt="{{ $name }}" width="200">
{{-- <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle"> --}}
@endsection
