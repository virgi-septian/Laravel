{{-- @extend untuk engambil kerangka dari folder layouts/main.blade.php--}}
@extends('layouts.main')

@section('section')
    @foreach($posts as $post)
        <article>
            {{-- Inputan slug yang ada dalam link href ini berfungsi untuk mengisi slug yang nanti diambil oleh halamam single post --}}
            <a href="/post/{{ $post['slug'] }}"><h2>{{ $post['title'] }}</h2> </a>
            <h5>By : {{ $post['author'] }}</h5>
            <p>{{ $post['body'] }}</p>
        </article>
    @endforeach
@endsection
