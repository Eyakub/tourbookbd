<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html lang="en">

<head>
    @include('layouts.metadata')
    <title>Tour Guides - TourBookBD</title>

    <!-- Favicons-->
    @include('layouts.baricon')

    <!-- Google web fonts -->
    <link href="https://fonts.googleapis.com/css?family=Gochi+Hand|Lato:300,400|Montserrat:400,400i,700,700i" rel="stylesheet">

    <link id="mainstyle" rel="stylesheet" href="{{asset('assets/stylesheets/skin.css')}}">

    <!-- CSS -->
    <link href="{{asset('css/base.css')}}" rel="stylesheet">

    <!--[if lt IE 9]-->
    <script src="{{URL::asset('js/html5shiv.min.js')}}"></script>
    <script src="{{URL::asset('js/respond.min.js')}}"></script>
    <![endif]-->

</head>

<body>

<!--[if lte IE 8]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
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


<section class="parallax-window" data-parallax="scroll" data-image-src="{{asset('storage/ken-treloar-369039-unsplash.jpg')}}" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-1">
        <div class="animated fadeInDown">
            <h1>Your little tour partners</h1>
            <p>All are ready to serve you the best tour to enjoy.</p>
        </div>
    </div>
</section>
<!-- End section -->

<main>
    <div id="position">
        <div class="container">
            <ul>
                <li><a href="{{URL::to('/')}}">Home</a>
                </li>
                <li>Tourist Guide Profile</li>
            </ul>
        </div>
    </div>
    <!-- End Position -->

    <div class="margin_60 container">
        <div class="container-fluid">
            <div class="row panel-wrapper">
                @foreach($guides as $guide)
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="widget">
                        <div class="w-section"
                             style="background: url({{asset('storage/ken-treloar-369039-unsplash.jpg')}}); background-size: cover; height: 200px;">
                            <div class="w-user"><img src="{{asset('storage/guide_pic/'.$guide->guide_picture)}}" alt="">
                                <div>
                                    <a class="name" href="{{URL::To('/tourist-guides/'.$guide->guide_username)}}" target="_blank">{{$guide->guide_name}}</a>
                                </div>
                            </div>
                        </div>
                        <div class="row-no-gutter text-xs-center p-b-2">
                            <div class="col-xs-4">
                                <div class="text-desc">Rating</div>
                                <b>4.75</b>
                            </div>
                            <div class="col-xs-4">
                                <div class="text-desc">Language</div>
                                <b>3</b>
                            </div>
                            <div class="col-xs-4">
                                <div class="text-desc">Blogs</div>
                                <b>5</b>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- End container -->
</main>
<!-- End main -->
@include('layouts.footer')
<!-- End footer -->

<div id="toTop"></div><!-- Back to top button -->

<!-- Search Menu -->
<div class="search-overlay-menu">
    <span class="search-overlay-close"><i class="icon_set_1_icon-77"></i></span>
    <form role="search" id="searchform" method="get">
        <input value="" name="q" type="search" placeholder="Search..." />
        <button type="submit"><i class="icon_set_1_icon-78"></i>
        </button>
    </form>
</div><!-- End Search Menu -->

<!-- Common scripts -->
<script src="{{URL::asset('js/jquery-2.2.4.min.js')}}"></script>
<script src="{{URL::asset('js/common_scripts_min.js')}}"></script>
<script src="{{URL::asset('js/functions.js')}}"></script>

</body>

</html>