@extends('layouts.public')

@section('style')
<style>
    .center {
        margin: auto;
        width: 60%;
        height: 500px;
        padding: 10px;
    }
    iframe {
        width: 100%;
        height: 100%;
        margin: 0 auto;
    }
</style>
@endsection

@section('header')
<div class="row">
    <div class="col-md-12 text-center">
        <div class="text-pageheader">
            <div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.0s">
                Eventi
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
@isset($events)
@foreach($events as $event)
<!-- CONTENT =============================-->
<section class="item content">
    <div class="container toparea">
        <div class="underlined-title">
            <div class="editContent">
                <h1 class="text-center latestitems">{{$event->eventName}}</h1>
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
            <div class="col-md-8">
                <div class="productbox">
                    @include('helpers/eventImg', ['attrs' => 'imagefrm', 'imgFile' => $event->image])
                    <div class="clearfix">
                    </div>
                    <br/>
                    <div class="product-details text-left">
                        <p>
                            {{$event->eventLongDesc}}

                        </p>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <a href="#checkout.html" class="btn btn-buynow">{{ number_format($event->getPrice(), 2, ',', '.') }} € - Acquista</a>
                <div class="properties-box">
                    <ul class="unstyle ">
                        <li><b class="propertyname">Categoria:</b> {{$event->eventCat}}</li>
                        <li><b class="propertyname">Data e Ora:</b> {{$event->eventData}}</li>
                        <li><b class="propertyname">Prezzo:</b> {{ number_format($event->getPrice(), 2, ',', '.') }} €</li>
                        <li><b class="propertyname">Sconto:</b> {{$event->eventDiscount. '%'}}</li>
                        <li><b class="propertyname">Posto:</b> {{$event->eventPlace}}</li>
                        <li><b class="propertyname">Posti disponibili:</b> {{$event->eventSeats}}</li>
                        <li><b class="propertyname">Organizzatore:</b> {{($event->getPromoter($event->eventPromoter))}}</li>
                        <li><b class="propertyname">Telefono:</b> {{($event->getPromoterPhone($event->eventPromoter))}}</li>
                        <li><b class="propertyname">E-mail: </b><a target="_blank" href="{{asset('mailto:').$event->getPromoterMail($event->eventPromoter)}}">{{' '.($event->getPromoterMail($event->eventPromoter))}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="center">
        <iframe src="{{asset('https://www.google.com/maps/embed/v1/place?key={{$API_KEY}}&q='. $event->eventPlace)}}" style="margin: 0 auto" ></iframe>
    </div>
</section>
@endforeach
@endisset
@endsection





