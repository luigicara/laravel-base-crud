@extends('layouts.main-layout')

@section('content')
    
    <h1>SAINT: {{ $saint -> nome }} {{ $saint -> luogoNascita }}</h1>
    <div>
        <h3>Data Benedizione: {{ $saint -> dataBenedizione }}</h3>
        <h3>Numero Miracoli: {{ $saint -> numeroMiracoli }}</h3>
    </div>

@endsection