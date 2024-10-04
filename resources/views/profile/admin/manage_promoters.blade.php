@extends('profile.profile')


@section('function')
<ul>
    <li><a href="{{route('delete_users')}}">Cancellazione Clienti</a></li>
    <br>
    <li><a href="{{route('manage_promoters')}}">Gestione Promoter</a></li>
    <br>
    <li><a href="{{route('show_promoters')}}">Visualizzazione Dati Organizzazione</a></li>
    <br>
    <li><a href="{{route('manage_faq')}}">Gestione F.A.Q.</a></li>
</ul>
@endsection

@section('option')
         <section id="content" style="height: auto">
             <h2>Gestione Promoter</h2>
          </section>
@endsection