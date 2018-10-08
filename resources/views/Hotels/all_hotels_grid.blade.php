<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Citytours - Premium site template for city tours agencies, transfers and tickets.">
    <meta name="author" content="Ansonika">
    <title>TourBookBD - A place of natural beauty</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- Google web fonts -->
    <link href="https://fonts.googleapis.com/css?family=Gochi+Hand|Lato:300,400|Montserrat:400,400i,700,700i" rel="stylesheet">

    <!-- CSS -->
    <link href="css/base.css" rel="stylesheet">

    <!-- Radio and check inputs -->
    <link href="css/skins/square/grey.css" rel="stylesheet">

    <!-- Range slider -->
    <link href="css/ion.rangeSlider.css" rel="stylesheet">
    <link href="css/ion.rangeSlider.skinFlat.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
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
<header>
    <div id="top_line">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6"><i class="icon-phone"></i><strong>+880 1937424217</strong>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-6">
                    <ul id="top_links">
                        <li>
                            <div class="dropdown dropdown-access">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="access_link">Sign in</a>
                                <div class="dropdown-menu">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <a href="#" class="bt_facebook">
                                                <i class="icon-facebook"></i>Facebook </a>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <a href="#" class="bt_paypal">
                                                <i class="icon-paypal"></i>Paypal </a>
                                        </div>
                                    </div>
                                    <div class="login-or">
                                        <hr class="hr-or">
                                        <span class="span-or">or</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="inputUsernameEmail" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                    </div>
                                    <a id="forgot_pw" href="#">Forgot password?</a>
                                    <input type="submit" name="Sign in" value="Sign in" id="Sign_in" class="button_drop">
                                    <input type="submit" name="Sign up" value="Sign up" id="Sign_up" class="button_drop outline">
                                </div>
                            </div>
                            <!-- End Dropdown access -->
                        </li>
                        <li><a href="wishlist.html" id="wishlist_link">Wishlist</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End row -->
        </div>
        <!-- End container-->
    </div>
    <!-- End top line-->

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-3">
                <div id="logo">
                    <a href={{URL::to('/')}}><img src="img/logo.png" width="160" height="34" alt="City tours" data-retina="true" class="logo_normal">
                    </a>
                    <a href={{URL::to('/')}}><img src="img/logo_sticky.png" width="160" height="34" alt="City tours" data-retina="true" class="logo_sticky">
                    </a>
                </div>
            </div>
            <nav class="col-md-9 col-sm-9 col-xs-9">
                <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                <div class="main-menu">
                    <div id="header_menu">
                        <img src="img/logo_sticky.png" width="160" height="34" alt="City tours" data-retina="true">
                    </div>
                    <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                    <ul>
                        <li class="submenu">
                            <a href={{URL::to('/')}} class="show-submenu">Home </a>
                            {{--<ul>
                                <li><a href="javascript:void(0);">Revolution slider</a>
                                    <ul>
                                        <li><a href={{URL::to('/')}}">Default slider</a></li>
                                        <li><a href="index_20.html">Advanced slider</a></li>
                                        <li><a href="index_14.html">Youtube Hero</a></li>
                                        <li><a href="index_15.html">Vimeo Hero</a></li>
                                        <li><a href="index_17.html">Youtube 4K</a></li>
                                        <li><a href="index_16.html">Carousel</a></li>
                                        <li><a href="index_19.html">Mailchimp Newsletter</a></li>
                                        <li><a href="index_18.html">Fixed Caption</a></li>
                                    </ul>
                                </li>
                                <li><a href="index_12.html">Layer slider</a></li>
                                <li><a href="index_2.html">With Only tours</a></li>
                                <li><a href="index_3.html">Single image</a></li>
                                <li><a href="index_4.html">Header video</a></li>
                                <li><a href="index_7.html">With search panel</a></li>
                                <li><a href="index_13.html">With tabs</a></li>
                                <li><a href="index_5.html">With map</a></li>
                                <li><a href="index_6.html">With search bar</a></li>
                                <li><a href="index_8.html">Search bar + Video</a></li>
                                <li><a href="index_9.html">With Text Rotator</a></li>
                                <li><a href="index_10.html">With Cookie Bar (EU law)</a></li>
                                <li><a href="index_11.html">Popup Advertising</a></li>
                            </ul>--}}
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="show-submenu">Tours <i class="icon-down-open-mini"></i></a>
                            <ul>
                                <li><a href="{{URL::to('/all-tour')}}">All tours list</a></li>
                                <li><a href="{{URL::to('/coming_soon')}}">Popular List</a></li>
                                <li><a href="{{URL::to('/coming_soon')}}">Close to Sea</a></li>
                                <li><a href="{{URL::to('/coming_soon')}}">Hill Tracking</a></li>
                                <li><a href="{{URL::to('/coming_soon')}}">Waterfalls</a></li>
                                {{--<li><a href="javascript:void(0);">Single tour fixed sidebar</a>
                                    <ul>
                                        <li><a href="single_tour_fixed_sidebar.html">Single tour fixed sidebar</a></li>
                                        <li><a href="single_tour_with_gallery_fixed_sidebar.html">Single tour 2 Fixed Sidebar</a></li>
                                        <li><a href="cart_fixed_sidebar.html">Cart Fixed Sidebar</a></li>
                                        <li><a href="payment_fixed_sidebar.html">Payment Fixed Sidebar</a></li>
                                        <li><a href="confirmation_fixed_sidebar.html">Confirmation Fixed Sidebar</a></li>
                                    </ul>
                                </li>--}}
                                <li><a href="{{URL::to('/coming_soon')}}">Hide in Nature</a></li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="{{URL::to('/resorts')}}">Restaurants {{--<i class="icon-down-open-mini"></i>--}}</a>
                        </li>

                        <li class="submenu">
                            <a href="javascript:void(0);" class="show-submenu">Hotels & Resorts <i
                                        class="icon-down-open-mini"></i></a>
                            <ul>
                                <li><a href="{{URL::to('/hotels')}}">All hotels list</a></li>
                                <li><a href="{{URL::to('/resorts')}}">All Resorts</a></li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="javascript:void(0);">Tour Blog {{--<i class="icon-down-open-mini"></i>--}}</a>
                        </li>

                    </ul>
                </div><!-- End main-menu -->
                <ul id="top_tools">
                    <li>
                        <div class="dropdown dropdown-search">
                            <a href="#" class="search-overlay-menu-btn" data-toggle="dropdown"><i class="icon-search"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown dropdown-cart">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class=" icon-basket-1"></i>Cart (0) </a>
                            <ul class="dropdown-menu" id="cart_items">
                                <li>
                                    <div class="image"><img src="img/thumb_cart_1.jpg" alt="image"></div>
                                    <strong>
                                        <a href="#">Louvre museum</a>1x $36.00 </strong>
                                    <a href="#" class="action"><i class="icon-trash"></i></a>
                                </li>
                                <li>
                                    <div class="image"><img src="img/thumb_cart_2.jpg" alt="image"></div>
                                    <strong>
                                        <a href="#">Versailles tour</a>2x $36.00 </strong>
                                    <a href="#" class="action"><i class="icon-trash"></i></a>
                                </li>
                                <li>
                                    <div class="image"><img src="img/thumb_cart_3.jpg" alt="image"></div>
                                    <strong>
                                        <a href="#">Versailles tour</a>1x $36.00 </strong>
                                    <a href="#" class="action"><i class="icon-trash"></i></a>
                                </li>
                                <li>
                                    <div>Total: <span>$120.00</span></div>
                                    <a href="cart.html" class="button_drop">Go to cart</a>
                                    <a href="payment.html" class="button_drop outline">Check out</a>
                                </li>
                            </ul>
                        </div><!-- End dropdown-cart-->
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- container -->
</header>
<!-- End Header -->

<section class="parallax-window" data-parallax="scroll" data-image-src="img/hotels_bg.jpg" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-1">
        <div class="animated fadeInDown">
            <h1>Paris Hotels</h1>
            <p>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</p>
        </div>
    </div>
</section>
<!-- End section -->

<main>
    <div id="position">
        <div class="container">
            <ul>
                <li><a href="#">Home</a>
                </li>
                <li><a href="#">Category</a>
                </li>
                <li>All hotels</li>
            </ul>
        </div>
    </div>
    <!-- Position -->

    <div class="collapse" id="collapseMap">
        <div id="map" class="map"></div>
    </div>
    <!-- End Map -->

    <div class="container margin_60">
        <div class="row">
            <aside class="col-lg-3 col-md-3">
                <p>
                    <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a>
                </p>

                <div id="filters_col">
                    <a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt"><i class="icon_set_1_icon-65"></i>Filters <i class="icon-plus-1 pull-right"></i></a>
                    <div class="collapse in" id="collapseFilters">
                        <div class="filter_type">
                            <h6>Price</h6>
                            <input type="text" id="range" name="range" value="">
                        </div>
                        <div class="filter_type">
                            <h6>Star Category</h6>
                            <ul>
                                <li>
                                    <label>
                                        <input type="checkbox"><span class="rating">
						<i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i>
						</span>(15)</label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox"><span class="rating">
						<i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81"></i>
						</span>(45)</label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox"><span class="rating">
						<i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i>
						</span>(35)</label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox"><span class="rating">
						<i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i>
						</span>(25)</label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox"><span class="rating">
						<i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i>
						</span>(15)</label>
                                </li>
                            </ul>
                        </div>
                        <div class="filter_type">
                            <h6>Review Score</h6>
                            <ul>
                                <li>
                                    <label>
                                        <input type="checkbox">Superb: 9+ (77)</label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox">Very good: 8+ (552)</label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox">Good: 7+ (909)</label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox">Pleasant: 6+ (1196)</label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox">No rating (198)</label>
                                </li>
                            </ul>
                        </div>
                        <div class="filter_type">
                            <h6>Facility</h6>
                            <ul>
                                <li>
                                    <label>
                                        <input type="checkbox">Pet allowed</label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox">Wifi</label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox">Spa</label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox">Restaurant</label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox">Pool</label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox">Parking</label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox">Fitness center</label>
                                </li>
                            </ul>
                        </div>
                        <div class="filter_type">
                            <h6>District</h6>
                            <ul>
                                <li>
                                    <label>
                                        <input type="checkbox">Paris Centre</label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox">La Defance</label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox">La Marais</label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox">Latin Quarter</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--End collapse -->
                </div>
                <!--End filters col-->
                <div class="box_style_2">
                    <i class="icon_set_1_icon-57"></i>
                    <h4>Need <span>Help?</span></h4>
                    <a href="tel://+8801937424217" class="phone">+8801937424217</a>
                    <small>Monday to Friday 9.00am - 7.30pm</small>
                </div>
            </aside>
            <!--End aside -->

            <div class="col-lg-9 col-md-8">

                <div id="tools">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="styled-select-filters">
                                <select name="sort_price" id="sort_price">
                                    <option value="" selected>Sort by price</option>
                                    <option value="lower">Lowest price</option>
                                    <option value="higher">Highest price</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="styled-select-filters">
                                <select name="sort_rating" id="sort_rating">
                                    <option value="" selected>Sort by ranking</option>
                                    <option value="lower">Lowest ranking</option>
                                    <option value="higher">Highest ranking</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 hidden-xs text-right">
                            <a href="#" class="bt_filters"><i class="icon-th"></i></a> <a href="all_hotels_list.html" class="bt_filters"><i class=" icon-list"></i></a>
                        </div>
                    </div>
                </div>
                <!--End tools -->


                @yield('hotel_content')

                <hr>

                <div class="text-center">
                    <ul class="pagination">
                        <li><a href="#">Prev</a>
                        </li>
                        <li class="active"><a href="#">1</a>
                        </li>
                        <li><a href="#">2</a>
                        </li>
                        <li><a href="#">3</a>
                        </li>
                        <li><a href="#">4</a>
                        </li>
                        <li><a href="#">5</a>
                        </li>
                        <li><a href="#">Next</a>
                        </li>
                    </ul>
                </div>
                <!-- end pagination-->

            </div>
            <!-- End col lg 9 -->
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
</main>
<!-- End main -->

<footer class="revealed">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-3">
                <h3>Need help?</h3>
                <a href="tel://+8801937424217" id="phone">+8801937424217</a>
                <a href="mailto:eyakubsorkar@gmail.com" id="email_footer">eyakubsorkar@gmail.com</a>
            </div>
            <div class="col-md-3 col-sm-3">
                <h3>About</h3>
                <ul>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Register</a></li>
                    <li><a href="#">Terms and condition</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-3">
                <h3>Discover</h3>
                <ul>
                    <li><a href="#">Community blog</a></li>
                    <li><a href="#">Tour guide</a></li>
                    <li><a href="#">Wishlist</a></li>
                    <li><a href="#">Gallery</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-3">
                <h3>Settings</h3>
                <div class="styled-select">
                    <select class="form-control" name="lang" id="lang">
                        <option value="English" selected>English</option>
                        <option value="French">Bangla</option>
                    </select>
                </div>
                <div class="styled-select">
                    <select class="form-control" name="currency" id="currency">
                        <option value="USD" selected>USD</option>
                        <option value="EUR">TK</option>
                    </select>
                </div>
            </div>
        </div><!-- End row -->
        <div class="row">
            <div class="col-md-12">
                <div id="social_footer">
                    <ul>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-google"></i></a></li>
                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                        <li><a href="#"><i class="icon-pinterest"></i></a></li>
                        <li><a href="#"><i class="icon-vimeo"></i></a></li>
                        <li><a href="#"><i class="icon-youtube-play"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    </ul>
                    <p>© TourBookBD 2018</p>
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
</footer><!-- End footer -->

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
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>

<!-- Specific scripts -->
<!-- Check and radio inputs -->
<script src="js/icheck.js"></script>
<script>
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-grey',
        radioClass: 'iradio_square-grey'
    });
</script>
<!-- Map -->
<script src="http://maps.googleapis.com/maps/api/js"></script>


<script src="js/map_hotels.js"></script>
<script src="js/infobox.js"></script>

</body>

</html>