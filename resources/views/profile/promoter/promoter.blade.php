@extends('profile.profile')


@section('function')
<ul>
    <li><a href="{{route('create_events')}}">Creazione Evento</a></li>
    <br>
    <li><a href="{{route('manage_events')}}">Gestione Eventi</a></li>
    <br>
    <li><a href="{{route('show_events')}}">Visualizzazione Dati Eventi</a></li>
</ul>
@endsection


@section('option')
 <section id="content" style="height: 500px">
                Scegli una funzione tra quelle dispinibili nella barra a sinistra.
</section>
@endsection