<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html lang="en">

<head>
    @include('layouts.metadata')
    <title>About Us - TourBookBD</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{asset('img/apple-touch-icon-57x57-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72"
          href="{{asset('img/apple-touch-icon-72x72-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
          href="{{asset('img/apple-touch-icon-114x114-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
          href="{{asset('img/apple-touch-icon-144x144-precomposed.png')}}">

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

<section class="parallax-window" data-parallax="scroll" data-image-src="{{asset('storage/sunset-3112911_1920.jpg')}}"
         data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-1">
        <div class="animated fadeInDown">
            <h1>About us</h1>
            <p>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</p>
        </div>
    </div>
</section>
<!-- End Section -->

<main>
    <div id="position">
        <div class="container">
            <ul>
                <li><a href="#">Home</a>
                </li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
    <!-- End Position -->

    <div class="container margin_60">

        <div class="main_title">
            <h2>Some <span>good </span>reasons</h2>
            <p>Customers are always our priority, for those reasons you should try us.</p>
        </div>

        <div class="row">
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="feature">
                    <i class="icon_set_1_icon-30"></i>
                    <h3><span>+ {{$totalUser}}</span> Customers</h3>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
                    </p>
                </div>
            </div>
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.2s">
                <div class="feature">
                    <i class="icon_set_1_icon-41"></i>
                    <h3><span>+{{$totalTour}}</span> Premium city tours</h3>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
                    </p>
                </div>
            </div>
        </div>
        <!-- End row -->
        <div class="row">
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="feature">
                    <i class="icon_set_1_icon-57"></i>
                    <h3><span>H24</span> Support</h3>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
                    </p>
                </div>
            </div>
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.4s">
                <div class="feature">
                    <i class="icon_set_1_icon-61"></i>
                    <h3><span>2 Languages</span> available</h3>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
                    </p>
                </div>
            </div>
        </div>
        <!-- End row -->
        <div class="row">
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="feature">
                    <i class="icon_set_1_icon-13"></i>
                    <h3><span>Accesibility</span> managment</h3>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
                    </p>
                </div>
            </div>
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.6s">
                <div class="feature">
                    <i class="icon_set_1_icon-22"></i>
                    <h3><span>Pet</span> allowed</h3>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
                    </p>
                </div>
            </div>
        </div>
        <!-- End row -->
        <hr>
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <h4>Pertinax elaboraret sed</h4>
                <p>Ad cum movet fierent assueverit, mei stet legere ne. Mel at vide soluta, ut <a href="#">utamur antiopam inciderint</a> sed. Ut iriure perpetua voluptaria has, vim postea denique in, mollis pertinax elaboraret sed in. Per no vidit timeam, quis omittam sed at. </p>
                <div class="general_icons">
                    <ul>
                        <li><i class="icon_set_1_icon-59"></i>Breakfast</li>
                        <li><i class="icon_set_1_icon-8"></i>Dinner</li>
                        <li><i class="icon_set_1_icon-32"></i>Photo collection</li>
                        <li><i class="icon_set_1_icon-50"></i>Personal shopper</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <h4>Mel at vide soluta</h4>
                <p>Ad cum movet fierent assueverit, mei stet legere ne. Mel at vide soluta, ut <strong>utamur antiopam inciderint</strong> sed. Ut iriure perpetua voluptaria has, vim postea denique in, mollis pertinax elaboraret sed in. Per no vidit timeam, quis omittam sed at. </p>
                <div class="general_icons">
                    <ul>
                        <li><i class="icon_set_1_icon-98"></i>Audio guide</li>
                        <li><i class="icon_set_1_icon-27"></i>Parking</li>
                        <li><i class="icon_set_1_icon-36"></i>Exchange</li>
                        <li><i class="icon_set_1_icon-63"></i>Mobile</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 nopadding features-intro-img">
                <div class="features-bg">
                    <div class="features-img"></div>
                </div>
            </div>
            <div class="col-md-6 nopadding">
                <div class="features-content">
                    <h3>"Ex vero mediocrem"</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                    <p><a href="#" class=" btn_1 white">Read more</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End container-fluid  -->

    <div class="container margin_60">

        <div class="main_title">
            <h2>What <span>customers </span>says</h2>
            <p>Before trying us, you may have some review about us from our respected customers.</p>
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

        <hr>

        <div class="row">
            <div class="col-md-8 col-sm-6 hidden-xs">
                <img src="img/14.png" height="480" width="480" alt="Laptop" class="img-responsive laptop">
            </div>
            <div class="col-md-4 col-sm-6">
                <h3><span>Get started</span> with TourBookBD</h3>
                <p>
                    Go and give it a try to our site, enjoy.
                </p>
                <ul class="list_order">
                    <li><span>1</span>Select your preferred tours</li>
                    <li><span>2</span>Purchase tickets and options</li>
                    <li><span>3</span>Pick them directly from your office</li>
                </ul>
                <a href="{{URL::to('/tours')}}" class="btn_1">Start now</a>
            </div>
        </div>
        <!-- End row -->
    </div>
    <!-- End Container -->
</main>
<!-- End main -->

@include('layouts.footer')<!-- End footer -->

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