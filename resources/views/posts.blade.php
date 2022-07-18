{{-- @extend untuk engambil kerangka dari folder layouts/main.blade.php--}}
@extends('layouts.main')

@section('section')
    @foreach($posts as $post)
        <article>
            {{-- Inputan slug ini yang ada dalam link href untuk mengisi slug yang nanti diambil oleh halamam post --}}
            <a href="/post/{{ $post['slug'] }}"><h2>{{ $post['tittle'] }}</h2> </a>
            <h5>By : {{ $post['author'] }}</h5>
            <p>{{ $post['body'] }}</p>
        </article>
    @endforeach
@endsection
