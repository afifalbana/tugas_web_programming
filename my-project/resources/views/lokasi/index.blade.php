@extends('layouts.app')

@section('content')
    <h1>Lokasi Perusahaan Stir Mobil</h1>
    <ul>
        @foreach($lokasi as $l)
            <li>{{ $l->alamat }}</li>
        @endforeach
    </ul>
@endsection
