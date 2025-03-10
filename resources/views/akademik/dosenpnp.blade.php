@extends('layout.main')
@section('title', 'Daftar Dosen')
    Daftar Dosen
@endsection
@section('content')
    <h1>Dafar mahasiswa jurusan TI</h1>
    <ol>
       @forelse ($Dsn as $namaDsn)
           <li>{{$namaDsn}}</li>
       @empty
           <div class="alert alert-warning d-inline-block">
                Data dosen tidak ada, silahkan isi array data dosen
           </div>
       @endforelse
    </ol>
@endsection