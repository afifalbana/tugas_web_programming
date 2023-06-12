@extends('layouts.app')

@section('content')
    <h1>Trainer Stir Mobil</h1>
    <ul>
        @foreach($trainer as $t)
            <li>{{ $t->nama }} - {{ $t->jabatan }}</li>
        @endforeach
    </ul>
@endsection
