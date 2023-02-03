@extends('layouts.main-layout')

@section('content')
    
    <h1>{{ $saint -> name }}</h1>
    <h2>Miracles Count: {{ $saint -> miracleCount }}</h2>
    <h3>Birth place: {{ $saint -> birthPlace }}</h3>
    <h3>Blessing date: {{ $saint -> blessingDate }}</h3>
    
@endsection