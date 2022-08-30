{{-- @extend untuk engambil kerangka dari folder layouts/main.blade.php--}}
@extends('layouts.main')

@section('section')
    <h1 class="mb-5">Post Categoris</h1>
    @foreach($categories as $category)
        <ul>
            <li><a href="/categories/{{ $category->slug }}"><h2>{{ $category->name }}</h2> </a></li>
        </ul>
    @endforeach
@endsection
