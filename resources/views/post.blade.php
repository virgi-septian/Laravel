{{-- @extend untuk engambil kerangka dari folder layouts/main.blade.php--}}
@extends('layouts.main')

{{-- section adalah cild dari yield 'section' --}}
@section('section')
    <article>
        <h2>{{ $post['title'] }}</h2>
        <h5>{{ $post['author'] }}</h5>
        <p>{!! $post['body'] !!}</p>

        <a href="/posts">kembali</a>
    </article>
@endsection