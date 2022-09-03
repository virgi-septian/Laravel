{{-- @extend untuk engambil kerangka dari folder layouts/main.blade.php--}}
@extends('layouts.main')

@section('section')
    <h1 class="mb-5">Authors</h1>
    @foreach($authors as $author)
        <ul>
            <li><a href="/authors/{{ $author->username }}"><h2>{{ $author->name }}</h2> </a></li>
        </ul>
    @endforeach
@endsection
