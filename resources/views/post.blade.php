
{{-- @extend untuk engambil kerangka dari folder layouts/main.blade.php--}}
@extends('layouts.main')

{{--  --}}
@section('section')
    <article>
        <h2>{{ $post['tittle'] }}</h2>
        <h5>{{ $post['author'] }}</h5>
        <p>{{ $post['body'] }}</p>

        <a href="/posts">kembali</a>
    </article>
@endsection