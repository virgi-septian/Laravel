{{-- @extend untuk engambil kerangka dari folder layouts/main.blade.php--}}
@extends('layouts.main')



{{-- section adalah cild dari yield 'section' --}}
@section('section')
    <article>
        <h2>{{ $post->title }}</h2>
        <p>By <a class="text-decoration-none" href="/authors/{{ $post->author->username }}">Virgi Septian</a>  in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        <p>{!! $post->body !!}</p>

        <a href="/posts">Back to Blog</a>
    </article>
@endsection