<!--mengambil konten yang ada difolder layout dan file main -->
@extends('layout.main')

<!--memanggil halaman container yang ada dihalaman utama di folder layout dan file main (yield)-->
@section('container')
    <h1>Halaman About</h1>
    <h1>{{ $name; }}</h1>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200">
@endsection