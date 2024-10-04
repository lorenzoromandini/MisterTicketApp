@extends('layouts.public')


@section('header')
<div class="row">
    <div class="col-md-12 text-center">
        <div class="text-pageheader">
            <div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.0s">
                Login
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="static">
    <h3>Login</h3>
    <p>Utilizza questa form per autenticarti al sito</p>

    <div class="container-contact">
        <div class="wrap-contact1">
            {{ Form::open(array('route' => 'login', 'class' => 'contact-form')) }}

            <div  class="wrap-input">
                <p> Se non hai già un account <a  href="{{ route('register') }}">registrati</a></p>
            </div>            
            <div  class="wrap-input">
                {{ Form::label('username', 'Nome Utente', ['class' => 'label-input']) }}
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

            <div class="container-form-btn">                
                {{ Form::submit('Login', ['class' => 'form-btn1']) }}
            </div>

            {{ Form::close() }}
        </div>
    </div>

</div>
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






