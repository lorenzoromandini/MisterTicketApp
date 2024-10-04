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
<section id="content" style="height: auto">
    
        <h3>Crea Evento</h3>

        <div class="container-contact"> 
            <div class="wrap-contact">

                {{ Form::open(array('route' => 'create_event', 'id' => 'addproduct', 'files' => true, 'class' => 'contact-form')) }}

                <div  class="wrap-input  rs1-wrap-input">
                    {{ Form::label('name', 'Nome Prodotto', ['class' => 'label-input']) }}
                    {{ Form::text('name', '', ['class' => 'input', 'id' => 'name']) }}
                </div>

                <div  class="wrap-input  rs1-wrap-input">
                    {{ Form::label('image', 'Immagine', ['class' => 'label-input']) }}
                    {{ Form::file('image', ['class' => 'input', 'id' => 'image']) }}
                </div>

                <div  class="wrap-input  rs1-wrap-input">
                    {{ Form::label('descShort', 'Descrizione Breve', ['class' => 'label-input']) }}
                    {{ Form::text('descShort', '', ['class' => 'input', 'id' => 'descShort']) }}
                </div>

                <div  class="wrap-input  rs1-wrap-input">
                    {{ Form::label('price', 'Prezzo', ['class' => 'label-input']) }}
                    {{ Form::text('price', '', ['class' => 'input', 'id' => 'price']) }}
                </div>

                <div  class="wrap-input  rs1-wrap-input">
                    {{ Form::label('discountPerc', 'Sconto (%)', ['class' => 'label-input']) }}
                    {{ Form::text('discountPerc', '', ['class' => 'input', 'id' => 'discountPerc']) }}
                </div>

                <div  class="wrap-input  rs1-wrap-input">
                    {{ Form::label('discounted', 'In Sconto', ['class' => 'label-input']) }}
                    {{ Form::select('discounted', ['1' => 'Si', '0' => 'No'], 1, ['class' => 'input','id' => 'discounted']) }}
                </div>

                <div  class="wrap-input  rs1-wrap-input">
                    {{ Form::label('descLong', 'Descrizione Estesa', ['class' => 'label-input']) }}
                    {{ Form::textarea('descLong', '', ['class' => 'input', 'id' => 'descLong', 'rows' => 2]) }}
                </div>

                <div class="container-form-btn">
                    {{ Form::submit('Aggiungi Prodotto', ['class' => 'form-btn1', 'id' => 'sub-btn']) }}
                </div>

                {{ Form::close() }}
            </div>
        </div>
</section>
@endsection