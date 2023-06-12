@extends('layouts.app')

@section('content')
    <h1>Paket Jasa Stir Mobil</h1>
    <ul>
        @foreach($paketJasa as $paket)
            <li>{{ $paket->nama }} - {{ $paket->deskripsi }}</li>
        @endforeach
    </ul>
@endsection
