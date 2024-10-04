@extends('layouts.public')

@section('header')
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="text-pageheader">
                <div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.0s">
                    F.A.Q.
                </div>
            </div>
        </div>
    </div>
    @endsection

    @section('content')
    <div class="container">
        <br>

        <div class="panel-group" id="accordion">
            <h2>Domande Genereli</h2>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">È necessaria la registrazione?</a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra dolor ac dui sodales, a ultricies est pharetra. Etiam in dictum sapien. Etiam id ante eu nulla fermentum congue. Mauris quis ex sit amet risus eleifend rutrum a ut tellus. Sed tempus sed nisl fermentum convallis. Nunc hendrerit tortor diam, lacinia bibendum urna elementum quis. Etiam iaculis diam tincidunt rutrum consectetur. Fusce placerat interdum dui, id congue magna ultricies vitae. Duis vulputate sit amet quam id euismod. Suspendisse vulputate arcu orci, placerat faucibus justo congue at. 
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">Domanda numero 2</a>
                    </h4>
                </div>
                <div id="collapseTen" class="panel-collapse collapse">
                    <div class="panel-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra dolor ac dui sodales, a ultricies est pharetra. Etiam in dictum sapien. Etiam id ante eu nulla fermentum congue. Mauris quis ex sit amet risus eleifend rutrum a ut tellus. Sed tempus sed nisl fermentum convallis. Nunc hendrerit tortor diam, lacinia bibendum urna elementum quis. Etiam iaculis diam tincidunt rutrum consectetur. Fusce placerat interdum dui, id congue magna ultricies vitae. Duis vulputate sit amet quam id euismod. Suspendisse vulputate arcu orci, placerat faucibus justo congue at.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">Domanda numero 3</a>
                    </h4>
                </div>
                <div id="collapseEleven" class="panel-collapse collapse">
                    <div class="panel-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra dolor ac dui sodales, a ultricies est pharetra. Etiam in dictum sapien. Etiam id ante eu nulla fermentum congue. Mauris quis ex sit amet risus eleifend rutrum a ut tellus. Sed tempus sed nisl fermentum convallis. Nunc hendrerit tortor diam, lacinia bibendum urna elementum quis. Etiam iaculis diam tincidunt rutrum consectetur. Fusce placerat interdum dui, id congue magna ultricies vitae. Duis vulputate sit amet quam id euismod. Suspendisse vulputate arcu orci, placerat faucibus justo congue at.
                    </div>
                </div>
            </div>

            <h2>Organizzatori</h2>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Who cen sell items?</a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                        Any registed user, who presents a work, which is genuine and appealing, can post it on <strong>PrepBootstrap</strong>.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">I want to sell my items - what are the steps?</a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                    <div class="panel-body">
                        The steps involved in this process are really simple. All you need to do is:
                        <ul>
                            <li>Register an account</li>
                            <li>Activate your account</li>
                            <li>Go to the <strong>Themes</strong> section and upload your theme</li>
                            <li>The next step is the approval step, which usually takes about 72 hours.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">How much do I get from each sale?</a>
                    </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse">
                    <div class="panel-body">
                        Here, at <strong>PrepBootstrap</strong>, we offer a great, 70% rate for each seller, regardless of any restrictions, such as volume, date of entry, etc.
                        <br />
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Why sell my items here?</a>
                    </h4>
                </div>
                <div id="collapseSix" class="panel-collapse collapse">
                    <div class="panel-body">
                        There are a number of reasons why you should join us:
                        <ul>
                            <li>A great 70% flat rate for your items.</li>
                            <li>Fast response/approval times. Many sites take weeks to process a theme or template. And if it gets rejected, there is another iteration. We have aliminated this, and made the process very fast. It only takes up to 72 hours for a template/theme to get reviewed.</li>
                            <li>We are not an exclusive marketplace. This means that you can sell your items on <strong>PrepBootstrap</strong>, as well as on any other marketplate, and thus increase your earning potential.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">What are the payment options?</a>
                    </h4>
                </div>
                <div id="collapseEight" class="panel-collapse collapse">
                    <div class="panel-body">
                        The best way to transfer funds is via Paypal. This secure platform ensures timely payments and a secure environment. 
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">When do I get paid?</a>
                    </h4>
                </div>
                <div id="collapseNine" class="panel-collapse collapse">
                    <div class="panel-body">
                        Our standard payment plan provides for monthly payments. At the end of each month, all accumulated funds are transfered to your account. 
                        The minimum amount of your balance should be at least 70 USD. 
                    </div>
                </div>
            </div>

            <h2>Clienti</h2>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">I want to buy a theme - what are the steps?</a>
                    </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse">
                    <div class="panel-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra dolor ac dui sodales, a ultricies est pharetra. Etiam in dictum sapien. Etiam id ante eu nulla fermentum congue. Mauris quis ex sit amet risus eleifend rutrum a ut tellus. Sed tempus sed nisl fermentum convallis. Nunc hendrerit tortor diam, lacinia bibendum urna elementum quis. Etiam iaculis diam tincidunt rutrum consectetur. Fusce placerat interdum dui, id congue magna ultricies vitae. Duis vulputate sit amet quam id euismod. Suspendisse vulputate arcu orci, placerat faucibus justo congue at. 
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">Is this the latest version of an item</a>
                    </h4>
                </div>
                <div id="collapseSeven" class="panel-collapse collapse">
                    <div class="panel-body">
                        Each item in <strong>PrepBootstrap</strong> is maintained to its latest version. This ensures its smooth operation.
                    </div>
                </div>
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
