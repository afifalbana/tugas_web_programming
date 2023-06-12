@extends('layouts.app')

@section('content')
    <h1>Kendaraan Stir Mobil</h1>
    <h2>Manual</h2>
    <ul>
        @foreach($kendaraanManual as $kendaraan)
            <li>{{ $kendaraan->nama }}</li>
        @endforeach
    </ul>

    <h2>Matic</h2>
    <ul>
        @foreach($kendaraanMatic as $kendaraan)
            <li>{{ $kendaraan->nama }}</li>
        @endforeach
    </ul>
@endsection
