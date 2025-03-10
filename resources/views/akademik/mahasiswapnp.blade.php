@extends('layout.main')
@section('title')
    Daftar Mahasiswa
@endsection
@section('content')
    <h1>Dafar mahasiswa jurusan TI</h1>
    <ol>
        @foreach ($Mhs as $namaMhs)
            <li>{{ $namaMhs }}</li>
        @endforeach
    </ol>
@endsection