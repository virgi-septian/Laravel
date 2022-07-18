{{-- @extend untuk engambil kerangka dari folder layouts/main.blade.php--}}
@extends('layouts.main')

{{-- section adalah sebuah bagian  --}}
@section('section')
    <h1>Halaman About</h1>

    <ul>
        <li>Nama = {{ $nama }}</li>
        <li>Email = {{ $email }}</li>
        <li>Kelas = {{ $kelas }}</li>
        <li><img src="img/{{ $img }}" alt="{{ $nama }}" height="270" width="235"></li>
    </ul>
@endsection