<!DOCTYPE html>
<!--[if IE 8]>
<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>
<html class="ie ie9"> <![endif]-->
<html lang="en">

<head>
    @include('layouts.metadata')
    <title>Confirmation</title>

    <!-- Favicons-->
@include('layouts.baricon')
<!-- Google web fonts -->
    <link href="https://fonts.googleapis.com/css?family=Gochi+Hand|Lato:300,400|Montserrat:400,400i,700,700i"
          rel="stylesheet">

    <!-- CSS -->
    <link href="{{asset('css/base.css')}}" rel="stylesheet">

    <!-- Radio and check inputs -->
    <link href="{{asset('css/skins/square/grey.css')}}" rel="stylesheet">

    <!--[if lt IE 9] -->
    <script src="{{URL::asset('js/html5shiv.min.js')}}"></script>
    <script src="{{URL::asset('js/respond.min.js')}}"></script>
    <![endif]-->

</head>

<body>

<!--[if lte IE 8]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a>.</p>
<![endif]-->

<div id="preloader">
    <div class="sk-spinner sk-spinner-wave">
        <div class="sk-rect1"></div>
        <div class="sk-rect2"></div>
        <div class="sk-rect3"></div>
        <div class="sk-rect4"></div>
        <div class="sk-rect5"></div>
    </div>
</div>
<!-- End Preload -->

<div class="layer"></div>
<!-- Mobile menu overlay mask -->

<!-- Header================================================== -->
@include('layouts.header')
<!-- End Header -->


<section id="hero_2">
    <div class="intro_title animated fadeInDown">
        <h1>Place your order</h1>
        <div class="bs-wizard">

            <div class="col-xs-4 bs-wizard-step complete">
                <div class="text-center bs-wizard-stepnum">Your cart</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a href="{{URL::to('/tours/bookings/carts')}}" class="bs-wizard-dot"></a>
            </div>

            <div class="col-xs-4 bs-wizard-step complete">
                <div class="text-center bs-wizard-stepnum">Your Payments</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a href="{{URL::to('/tours/bookings/carts/payments')}}" class="bs-wizard-dot"></a>
            </div>

            <div class="col-xs-4 bs-wizard-step complete">
                <div class="text-center bs-wizard-stepnum">Finish!</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a href="#" class="bs-wizard-dot"></a>
            </div>

        </div>
        <!-- End bs-wizard -->
    </div>
    <!-- End intro-title -->
</section>
<!-- End Section hero_2 -->

<main>
    <div id="position">
        <div class="container">
            <ul>
                <li><a href="#">Home</a>
                </li>
                <li><a href="{{URL::To('/tours')}}">Tours</a>
                </li>
                <li>Booking</li>
            </ul>
        </div>
    </div>
    <!-- End position -->

    <div class="container margin_60">
        <div class="row">
            <div class="col-md-8 add_bottom_15">

                <div class="form_title">
                    <h3><strong><i class="icon-ok"></i></strong>Thank you!</h3>
                    <p>
                        Thanks for being with us.
                    </p>
                </div>
                <div class="step">
                    <p>
                        Thanks for you patience, Have a ride on our site for now, We'll be confirm your Booking.
                        You can find it to your profile at Booking Section.
                    </p>
                </div>
                <!--End step -->

                <div class="form_title">
                    <h3><strong><i class="icon-tag-1"></i></strong>Booking summary</h3>
                    <p>
                        Have a look out there.
                    </p>
                </div>
                <div class="step">
                    <table class="table confirm">
                        <thead>
                        <tr>
                            <th colspan="2">
                                {{$tourName->tour_title}}
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <strong>Date</strong>
                            </td>
                            <td>
                                {{$tour_date}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>To</strong>
                            </td>
                            <td>
                                {{$userName->first_name}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Payment type</strong>
                            </td>
                            <td>
                                Bkash
                            </td>
                        </tr>
                        </tbody>
                    </table>

                </div>
                <!--End step -->
            </div>
            <!--End col-md-8 -->

            <aside class="col-md-4" id="sidebar">
                <div class="theiaStickySidebar">
                    <div class="box_style_1" id="booking_box">
                        <h3 class="inner">Thank you!</h3>
                        <p class="text-center">
                            <strong>Please check the Booking section on your profile.</strong>
                        </p>

                        {{--<a class="btn_full_outline" href="{{URL::to('/tours/bookings/carts/payments/confirmation/invoice')}}" target="_blank">View your invoice</a>--}}
                    </div>
                </div>
                <!--End sticky -->
            </aside>

        </div>
        <!--End row -->
    </div>
    <!--End container -->
</main>
<!-- End main -->

@include('layouts.footer')<!-- End footer -->

<div id="toTop"></div><!-- Back to top button -->

<!-- Search Menu -->
<div class="search-overlay-menu">
    <span class="search-overlay-close"><i class="icon_set_1_icon-77"></i></span>
    <form role="search" id="searchform" method="get">
        <input value="" name="q" type="search" placeholder="Search..."/>
        <button type="submit"><i class="icon_set_1_icon-78"></i>
        </button>
    </form>
</div><!-- End Search Menu -->

<!-- Jquery -->
<!-- Jquery -->
<script src="{{URL::asset('js/jquery-2.2.4.min.js')}}"></script>
<script src="{{URL::asset('js/common_scripts_min.js')}}"></script>
<script src="{{URL::asset('js/functions.js')}}"></script>

<script src="{{URL::asset('js/icheck.js')}}"></script>
<script>
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-grey',
        radioClass: 'iradio_square-grey'
    });
</script>

<!-- Fixed sidebar -->
<script src="{{URL::asset('js/theia-sticky-sidebar.js')}}"></script>
<script>
    jQuery('#sidebar').theiaStickySidebar({
        additionalMarginTop: 80
    });
</script>

</body>

</html>