@extends('layouts.app')

@section('content')
    <h1>Jadwal Belajar Stir Mobil</h1>
    <ul>
        @foreach($jadwalBelajar as $jadwal)
            <li>{{ $jadwal->hari }} - {{ $jadwal->waktu }} - {{ $jadwal->kelas }}</li>
        @endforeach
    </ul>
@endsection
