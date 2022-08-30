{{-- @extend untuk engambil kerangka dari folder layouts/main.blade.php--}}
@extends('layouts.main')

@section('section')
<h1 class="mb-5">Post Category : {{ $category }}</h1>
@foreach($posts as $post)
        <article>
            {{-- Inputan slug yang ada dalam link href ini berfungsi untuk mengisi slug yang nanti diambil oleh halamam single post --}}
            <a href="/post/{{ $post->slug }}"><h2>{{ $post->title }}</h2> </a>
            <p>{!! $post['excerpt'] !!}</p>
        </article>
    @endforeach
@endsection
