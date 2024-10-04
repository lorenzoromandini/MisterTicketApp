@extends('layouts.public')

@section('header')
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="text-homeimage">
                <div class="maintext-image" data-scrollreveal="enter top over 1.5s after 0.1s">
                    I migliori eventi
                </div>
                <div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.3s">
                    Solo su MisterTicket.it
                </div>
            </div>
        </div>
    </div>
    @endsection



    @section('content')
    <section class="item content">
        <div class="container">
            <div class="underlined-title">
                <div class="editContent">
                    <h1 class="text-center latestitems">Eventi Principali</h1>
                </div>
                <div class="wow-hr type_short">
                    <span class="wow-hr-h">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </span>
                </div>
            </div>
            <div class="row">

                <!-- EVENTO-->
                <div class="col-md-4">
                    <div class="productbox">
                        <div class="fadeshop">
                            <div class="captionshop text-center" style="display: none;">
                                <h3>Nome dell'evento</h3>
                                <p>
                                    Breve descrizione dell'evento
                                </p>
                                <p>
                                    <a href="checkout.html" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Acquista</a>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-link"></i> Dettagli</a>
                                </p>
                            </div>
                            <span class="maxproduct"><img src="images/foto01.jpg" alt=""></span>
                        </div>
                        <div class="product-details">
                            <a href="#">
                                <h1>Evento #1</h1>
                            </a>
                            <span class="price">
                                <span class="edd_price">49.00€</span> 
                            </span>
                        </div>
                    </div>
                </div>


                <!-- EVENTO-->
                <div class="col-md-4">
                    <div class="productbox">
                        <div class="fadeshop">
                            <div class="captionshop text-center" style="display: none;">
                                <h3>Item Name</h3>
                                <p>
                                    This is a short excerpt to generally describe what the item is about.
                                </p>
                                <p>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a>
                                </p>
                            </div>
                            <span class="maxproduct"><img src="images/foto02.png" alt=""></span>
                        </div>
                        <div class="product-details">
                            <a href="#">
                                <h1>Evento #2</h1>
                            </a>
                            <span class="price">
                                <span class="edd_price">49.00€</span>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- EVENTO-->
                <div class="col-md-4">
                    <div class="productbox">
                        <div class="fadeshop">
                            <div class="captionshop text-center" style="display: none;">
                                <h3>Item Name</h3>
                                <p>
                                    This is a short excerpt to generally describe what the item is about.
                                </p>
                                <p>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a>
                                </p>
                            </div>
                            <span class="maxproduct"><img src="images/foto03.jpg" alt=""></span>
                        </div>
                        <div class="product-details">
                            <a href="#">
                                <h1>Evento #3</h1>
                            </a>
                            <span class="price">
                                <span class="edd_price">49.00€</span>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- EVENTO-->
                <div class="col-md-4">
                    <div class="productbox">
                        <div class="fadeshop">
                            <div class="captionshop text-center" style="display: none;">
                                <h3>Item Name</h3>
                                <p>
                                    This is a short excerpt to generally describe what the item is about.
                                </p>
                                <p>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a>
                                </p>
                            </div>
                            <span class="maxproduct"><img src="images/foto04.jpg" alt=""></span>
                        </div>
                        <div class="product-details">
                            <a href="#">
                                <h1>Evento #4</h1>
                            </a>
                            <span class="price">
                                <span class="edd_price">49.00€</span>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- EVENTO-->
                <div class="col-md-4">
                    <div class="productbox">
                        <div class="fadeshop">
                            <div class="captionshop text-center" style="display: none;">
                                <h3>Item Name</h3>
                                <p>
                                    This is a short excerpt to generally describe what the item is about.
                                </p>
                                <p>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a>
                                </p>
                            </div>
                            <span class="maxproduct"><img src="images/foto05.jpg" alt=""></span>
                        </div>
                        <div class="product-details">
                            <a href="#">
                                <h1>Evento #5</h1>
                            </a>
                            <span class="price">
                                <span class="edd_price">49.00€</span>
                            </span>
                        </div>
                    </div>
                </div>


                <!-- EVENTO-->
                <div class="col-md-4">
                    <div class="productbox">
                        <div class="fadeshop">
                            <div class="captionshop text-center" style="display: none;">
                                <h3>Item Name</h3>
                                <p>
                                    This is a short excerpt to generally describe what the item is about.
                                </p>
                                <p>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
                                    <a href="#" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a>
                                </p>
                            </div>
                            <span class="maxproduct"><img src="images/foto06.jpg" alt=""></span>
                        </div>
                        <div class="product-details">
                            <a href="#">
                                <h1>Evento #6</h1>
                            </a>
                            <span class="price">
                                <span class="edd_price">49.00€</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- BUTTON =============================-->
    <div class="item content">
        <div class="container text-center">
            <a href="catalog.html" class="homebrowseitems">Vedi tutti gli eventi
                <div class="homebrowseitemsicon">
                    <i class="fa fa-star fa-spin"></i>
                </div>
            </a>
        </div>
    </div>
    <br/>
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