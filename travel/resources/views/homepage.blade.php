@extends('layout.app')

@section('title', 'homepage')

@section('content')

    <h1>Home Page</h1>

    @foreach ($travels as $travel)
        <div id="container">
            <img src="{{$travel['poster']}}" alt="">
            <h2><strong>Pacchetto Viaggio:</strong> {{$travel['nome']}}</h2><hr>
            <span><strong>Persone:</strong> {{$travel['persone']}}</span><br>
            <p><strong>Itinerario:</strong> {{$travel['itinerario']}}</p>
            <span><strong>Durata:</strong> {{$travel['giorni']}} giorni</span>
            <div>
                <span><strong>Partenza da:</strong> {{$travel['partenza']}}</span><br>
                <span><strong>Arrivo a:</strong> {{$travel['arrivo']}}</span>
            </div>
            <h3>Prezzo {{$travel['prezzo']}} Euro</h3>
        </div>
    @endforeach

@endsection