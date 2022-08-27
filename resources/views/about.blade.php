{{-- @extend untuk engambil kerangka dari folder layouts/main.blade.php--}}
@extends('layouts.main')

{{-- section adalah cild dari yield 'section'  --}}
@section('section')
    <h1>Halaman About</h1>

    <h3>Nama = {{ $nama }}</h3>
    <p>Email = {{ $email }}</p>
    <p>Kelas = {{ $kelas }}</p>
    <img class="img-thumnail rounded-circle" src="img/{{ $img }}" alt="{{ $nama }}" height="270" width="270">
@endsection