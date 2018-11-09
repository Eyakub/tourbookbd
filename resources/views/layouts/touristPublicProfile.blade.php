<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html lang="en">

<head>
    @include('layouts.metadata')
    <title>{{$guidePublic->guide_name}} - Tourist Guide</title>

    <!-- Favicons-->
    @include('layouts.baricon')

    <!-- Google web fonts -->
    <link href="https://fonts.googleapis.com/css?family=Gochi+Hand|Lato:300,400|Montserrat:400,400i,700,700i" rel="stylesheet">

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
            <h1>I am {{$guidePublic->guide_name}}</h1>
            <p>I'm ready to give my best.</p>
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
                <li><a href="{{URL::to('/tourist-guides')}}">Tourist Guides</a>
                </li>
                <li>{{$guidePublic->guide_name}}</li>
            </ul>
        </div>
    </div>
    <!-- End Position -->

    <div class="margin_60 container">
        <div id="tour_guide">
            <p>
                <img src="{{asset('storage/guide_pic/'.$guidePublic->guide_picture)}}" height="250" width="250" alt="Image" class="img-circle styled">
            </p>
            <h2>{{$guidePublic->guide_name}} - Certified tourist guide</h2>
            <p class="lead add_bottom_30">
                "{{$guidePublic->guide_quote}}."
            </p>
        </div>
        <div class="row">
            <div class="col-md-8">
                <h3>Some words about me</h3>
                <p>
                    {{$guidePublic->guide_about}}.
                </p>
                <h4>Education</h4>
                <p>
                    {{$guidePublic->guide_education}}.
                </p>
                <h4>Past experiences</h4>
                <p>
                    {{$guidePublic->guide_experience}}.
                </p>
            </div>
            <div class="col-md-4">
                <h3>Spoken languages</h3>
                <p>
                    {{$guidePublic->guide_languages}}.
                </p>
                <p>
                    <img src="img/lang_en.png" width="40" height="26" alt="Image" data-retina="true"> <img src="img/lang_fr.png" width="40" height="26" alt="Image" data-retina="true">
                    <img src="img/lang_de.png" width="40" height="26" alt="Image" data-retina="true"> <img src="img/lang_es.png" width="40" height="26" alt="Image" data-retina="true">
                </p>
                <h3><i class=""></i>Certificates</h3>
                <p>
                    {{$guidePublic->guide_certificates}}
                </p>
                <ul class="list_ok">
                    <li>Putant aliquando constituam</li>
                    <li>Commodo sententiae</li>
                    <li>Denique deterruisset</li>
                    <li>Putant aliquando constituam</li>
                </ul>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 nopadding features-intro-img">
                <div class="features-bg">
                    <div class="features-img">
                    </div>
                </div>
            </div>
            <div class="col-md-6 nopadding">
                <div class="features-content">
                    <h3>"Ex vero mediocrem"</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.
                    </p>
                    <p>
                        <a href="#" class=" btn_1 white">Read more</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container margin_60">
        <div class="main_title">
            <h2>What <span>customers </span>says</h2>
            <p>
                Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.
            </p>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="review_strip">
                    <img src="{{asset('img/eyakub.jpg')}}" height="78" width="78" alt="Image" class="img-circle">
                    <h4>Eyakub Sorkar</h4>
                    <p>
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
                    </p>
                    <div class="rating">
                        <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class=" icon-star-empty"></i><i class=" icon-star-empty"></i>
                    </div>
                </div>
                <!-- End review strip -->
            </div>

            <div class="col-md-6">
                <div class="review_strip">
                    <img src="{{asset('img/eyakub.jpg')}}" height="78" width="78" alt="Image" class="img-circle">
                    <h4>Eyakub Sorkar</h4>
                    <p>
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
                    </p>
                    <div class="rating">
                        <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class=" icon-star-empty"></i><i class=" icon-star-empty"></i>
                    </div>
                </div>
                <!-- End review strip -->
            </div>
        </div>
        <!-- End row -->

        <div class="row">
            <div class="col-md-6">
                <div class="review_strip">
                    <img src="{{asset('img/eyakub.jpg')}}" height="78" width="78" alt="Image" class="img-circle">
                    <h4>Eyakub Sorkar</h4>
                    <p>
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
                    </p>
                    <div class="rating">
                        <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class=" icon-star-empty"></i><i class=" icon-star-empty"></i>
                    </div>
                </div>
                <!-- End review strip -->
            </div>

            <div class="col-md-6">
                <div class="review_strip">
                    <img src="{{asset('img/eyakub.jpg')}}" height="78" width="78" alt="Image" class="img-circle">
                    <h4>Eyakub Sorkar</h4>
                    <p>
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
                    </p>
                    <div class="rating">
                        <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class=" icon-star-empty"></i><i class=" icon-star-empty"></i>
                    </div>
                </div>
                <!-- End review strip -->
            </div>
        </div>
        <!-- End row -->
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