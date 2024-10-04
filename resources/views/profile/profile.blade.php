@extends('layouts.public')

@section('style')
<style type="text/css">
    body {
        margin: 0;
    }

    #main {
        margin-left: 15%;
    }

    #navbar {
        width: 15%;
        height: 100%;
        padding: 1em 0.5%; 

        float: left; 
        margin-left: -15%;
    }

    #content {
        border-left: 1px solid #5CCCCC;
        padding: 1em 0.5em;
    }
</style>
@endsection      

@section('header')

<div class="row">
    <div class="col-md-12 text-center">
        <div class="text-pageheader">
            <div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.0s">
                Profilo
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<section id="main">
    <nav id="navbar">
        <h2>Funzioni</h2>
        <br><br>
        @yield('function')
    </nav>

    @yield('option')

</section>
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