@extends('layouts.main-layout')

@section('content')

    <h1>SANTI</h1>
    <ul>
        @foreach ($saints as $saint)
            <li>
                <a href="/saint/{{ $saint -> id }}">
                    [{{ $saint -> id }}] {{ $saint -> nome }} {{ $saint -> luogoNascita }} - {{ $saint -> dataBenedizione }}
                </a>
            </li>
        @endforeach
    </ul>

@endsection