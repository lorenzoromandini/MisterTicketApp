@extends('layouts.public')

@section('header')
<div class="row">
    <div class="col-md-12 text-center">
        <div class="text-pageheader">
            <div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.0s">
                Registrazione
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="loginofficial"> 
    <h3 style="">Registrazione</h3>


    {{ Form::open(array('route' => 'register', 'class' => 'contact-form')) }}
    
    <div  class="wrap-input">
        {{ Form::label('level', 'Cliente') }}
        {{ Form::radio('level', 'Cliente', true) }} 
        {{ Form::label('level', 'Organizzatore') }}
        {{ Form::radio('level', 'Organizzatore')}} 
    </div>
    

    <div  class="wrap-input">
        {{ Form::label('username', 'Username', ['class' => 'label-input']) }}
        {{ Form::text('username', '', ['class' => 'input','id' => 'username']) }}
        @if ($errors->first('username'))
        <ul class="errors">
            @foreach ($errors->get('username') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <div  class="wrap-input">
        {{ Form::label('name', 'Nome Cognome', ['class' => 'label-input']) }}
        {{ Form::text('name', '', ['class' => 'input', 'id' => 'name']) }}
        @if ($errors->first('name'))
        <ul class="errors">
            @foreach ($errors->get('name') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <div  class="wrap-input">
        {{ Form::label('userMail', 'Email', ['class' => 'label-input']) }}
        {{ Form::text('userMail', '', ['class' => 'input','id' => 'userMail']) }}
        @if ($errors->first('userMail'))
        <ul class="errors">
            @foreach ($errors->get('userMail') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
    </div>



    <div  class="wrap-input">
        {{ Form::label('password', 'Password', ['class' => 'label-input']) }}
        {{ Form::password('password', ['class' => 'input', 'id' => 'password']) }}
        @if ($errors->first('password'))
        <ul class="errors">
            @foreach ($errors->get('password') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <div  class="wrap-input">
        {{ Form::label('password-confirm', 'Conferma password', ['class' => 'label-input']) }}
        {{ Form::password('password_confirmation', ['class' => 'input', 'id' => 'password-confirm']) }}
    </div>
    
    <div  class="wrap-input">
        {{ Form::label('userPhone', 'Telefono', ['class' => 'label-input']) }}
        {{ Form::text('userPhone', '', ['class' => 'input', 'id' => 'userPhone']) }}
        @if ($errors->first('userPhone'))
        <ul class="errors">
            @foreach ($errors->get('userPhone') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
    </div>
    
    
    <div  class="wrap-input">
        {{ Form::label('userAddress', 'Indirizzo', ['class' => 'label-input']) }}
        {{ Form::text('userAddress', '', ['class' => 'input', 'id' => 'userAddress']) }}
        @if ($errors->first('userAddress'))
        <ul class="errors">
            @foreach ($errors->get('userAddress') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
    </div>
    
    <div  class="wrap-input">
        {{ Form::label('CF_PIVA', 'Cod. Fiscale | P. IVA', ['class' => 'label-input']) }}
        {{ Form::text('CF_PIVA', '', ['class' => 'input', 'id' => 'CF_PIVA']) }}
        @if ($errors->first('CF_PIVA'))
        <ul class="errors">
            @foreach ($errors->get('CF_PIVA') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <br>
    

    <div class="container-form-btn">                
        {{ Form::submit('Registrati', ['class' => 'form-btn1']) }}
    </div>

    {{ Form::close() }}    

</div>

<br>
@endsection

@section('scripts')
<script src="js/jquery-.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/anim.js"></script>
<script>
//----HOVER CAPTION---//	  
jQuery(document).ready(function ($) {
    $('.fadeshop').hover(
            function () {
                $(this).find('.captionshop').fadeIn(150);
            },
            function () {
                $(this).find('.captionshop').fadeOut(150);
            }
    );
});
</script>
@endsection

