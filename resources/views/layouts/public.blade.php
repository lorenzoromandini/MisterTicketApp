<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="generator" content="">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700" rel="stylesheet">
        @yield('style')
        <title>MisterTicket</title>

    </head>

    <body>
        <!-- HEADER =============================-->
        <header class="item header margin-top-0">
            <div class="wrapper">
                <nav role="navigation" class="navbar navbar-white navbar-embossed navbar-lg navbar-fixed-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">
                                <i class="fa fa-bars"></i>

                            </button>
                            <a href="index.html" class="navbar-brand brand"> MisterTicket </a>
                        </div>
                        @include('layouts/_navpublic')
                    </div>
                </nav>
                <div class="container">
                    @yield('header')
                </div>
            </div>
        </header>





        <!-- CONTENUTO DEL SITO -->
        @yield('content')




        <!-- FOOTER =============================-->
        <div class="footer text-center">
            <div class="container">
                <div class="row">
                    <p class="footernote">
                        MisterTicket Social
                    </p>
                    <ul class="social-iconsfooter">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    </ul>

                </div>
            </div>
        </div>

        <!-- SCRIPTS =============================-->
        <script src="js/jquery-.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/anim.js"></script>
        
        @yield('scripts')
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

    </body>        
</html>