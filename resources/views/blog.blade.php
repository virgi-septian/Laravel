{{-- @extend untuk engambil kerangka dari folder layouts/main.blade.php--}}
@extends('layouts.main')

@section('section')
    <h1 class="mb-5">Halaman Blog Posts</h1>
    @foreach($posts as $post)
    
        <article class="mb-5 border-bottom pb-4">
            {{-- Inputan slug yang ada dalam link href ini berfungsi untuk mengisi slug yang nanti diambil oleh halamam single post --}}
            <a class="text-decoration-none" href="/post/{{ $post->slug }}"><h2>{{ $post->title }}</h2> </a>
            <p>By Virgi Septian in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            <p>{!! $post['excerpt'] !!}</p>
            <p><a class="text-decoration-none" href="/post/{{ $post->slug }}">read more ...</a></p>
        </article>
    @endforeach
@endsection
