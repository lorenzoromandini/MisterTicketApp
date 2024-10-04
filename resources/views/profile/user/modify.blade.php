@extends('profile.profile')


@section('function')
<ul>
    <li><a href="{{route('user_history')}}">Storico Acquisti</a></li>
    <br>
    <li><a href="{{route('user_modify')}}">Modifica Dati Personali</a></li>
</ul>
@endsection

@section('option')
         <section id="content" style="height: auto">
             <h2>Modifica Dati Personali</h2>
          </section>
@endsection