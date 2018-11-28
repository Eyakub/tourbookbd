<!DOCTYPE html>
<!--[if IE 8]>
<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>
<html class="ie ie9"> <![endif]-->
<html lang="en">

<head>
    @include('layouts.metadata')
    <title>Tour Booking Cart</title>

    <!-- Favicons-->
@include('layouts.baricon')

<!-- Google web fonts -->
    <link href="https://fonts.googleapis.com/css?family=Gochi+Hand|Lato:300,400|Montserrat:400,400i,700,700i"
          rel="stylesheet">

    <!-- CSS -->
    <link href="{{asset('css/base.css')}}" rel="stylesheet">

    <!-- CSS -->
    <link href="{{asset('css/jquery.switch.css')}}" rel="stylesheet">

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

            <div class="col-xs-4 bs-wizard-step active">
                <div class="text-center bs-wizard-stepnum">Your cart</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a href="#0" class="bs-wizard-dot"></a>
            </div>

            <div class="col-xs-4 bs-wizard-step disabled">
                <div class="text-center bs-wizard-stepnum">Your details</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a href="#" class="bs-wizard-dot"></a>
            </div>

            <div class="col-xs-4 bs-wizard-step disabled">
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
                <li><a href="{{URL::to('/tours')}}">Tours</a>
                </li>
                <li>Cart</li>
            </ul>
        </div>
    </div>
    <!-- End position -->

    <div class="container margin_60">
        <div class="row">
            <div class="col-md-8">
                <table class="table table-striped options_cart">
                    <thead>
                    <tr>
                        <th colspan="3">
                            Services and Info
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td style="width:10%">
                            <i class="icon_set_1_icon-16"></i>
                        </td>
                        <td style="width:60%">
                            Children Cost  <strong> Per {{$tourInfo->tour_children_price}}</strong>
                        </td>
                        <td style="width:35%">
                            <label class="switch-light switch-ios pull-right">
                                {{$showChildrensTotalCost}}
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td style="width:10%">
                            <i class="icon_set_1_icon-16"></i>
                        </td>
                        <td style="width:60%">
                            Adult Cost <strong> Per {{$tourInfo->tour_adult_price}}</strong>
                        </td>
                        <td style="width:35%">
                            <label class="switch-light switch-ios pull-right">
                                {{$showAdultsTotalCost}}
                            </label>
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <i class="icon_set_1_icon-59"></i>
                        </td>
                        <td>
                            Coffee break <strong></strong>
                        </td>
                        <td style="width:35%">
                            <label class="switch-light switch-ios pull-right">
                                Free
                            </label>
                        </td>
                    </tr>

                    </tbody>
                </table>
                <div class="add_bottom_15">
                    <small>* Prices for Event.</small>
                </div>
            </div>
            <!-- End col-md-8 -->

            <aside class="col-md-4" id="sidebar">
                <div class="theiaStickySidebar">
                    <div class="box_style_1">
                        <h3 class="inner">- Summary -</h3>
                        <table class="table table_summary">
                            <tbody>
                            <tr>
                                <td>
                                    Adults
                                </td>
                                <td class="text-right">
                                    {{$booking_adult_no}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Children
                                </td>
                                <td class="text-right">
                                    {{$booking_children_no}}
                                </td>
                            </tr>

                            <tr class="total">
                                <td>
                                    Total cost
                                </td>
                                <td class="text-right">
                                    {{$showTotalAmountInput}}
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <a class="btn_full" href="{{URL::to('/tours/bookings/carts/payments/')}}">Check out</a>
                        <a class="btn_full_outline" href="#"><i class="icon-right"></i> Continue Booking</a>
                    </div>
                </div>
                <!-- End sitcky -->
            </aside>
            <!-- End aside -->

        </div>
        <!--End row -->
    </div>
    <!--End container -->
</main>
<!-- End main -->

@include('layouts.footer')

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
<script src="{{URL::asset('js/jquery-2.2.4.min.js')}}"></script>
<script src="{{URL::asset('js/common_scripts_min.js')}}"></script>
<script src="{{URL::asset('js/functions.js')}}"></script>

<!-- Fixed sidebar -->
<script src="{{URL::asset('js/theia-sticky-sidebar.js')}}"></script>
<script>
    jQuery('#sidebar').theiaStickySidebar({
        additionalMarginTop: 80
    });
</script>

</body>

</html>