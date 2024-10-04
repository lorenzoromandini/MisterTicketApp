@extends('profile.profile')


@section('function')
<ul>
    <li><a href="{{route('user_history')}}">Storico Acquisti</a></li>
    <br>
    <li><a href="{{route('user_modify')}}">Modifica Dati Personali</a></li>
</ul>
@endsection


@section('option')
 <section id="content" style="height: 500px">
                Scegli una funzione tra quelle dispinibili nella barra a sinistra.
</section>
@endsection