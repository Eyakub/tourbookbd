<!DOCTYPE html>
<!--[if IE 8]>
<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>
<html class="ie ie9"> <![endif]-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Tour book BD">
    <meta name="author" content="Ansonika">
    <title>Tour Book BD - Tour Book BD site by Eyakub</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
          href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
          href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- Google web fonts -->
    <link href="https://fonts.googleapis.com/css?family=Gochi+Hand|Lato:300,400|Montserrat:400,400i,700,700i"
          rel="stylesheet">

    <!-- CSS -->
    <link href="css/base.css" rel="stylesheet">

    <!-- CSS -->
    <link href="css/flickity.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
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
                                        <input type="text" class="form-control" id="inputUsernameEmail"
                                               placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="inputPassword"
                                               placeholder="Password">
                                    </div>
                                    <a id="forgot_pw" href="#">Forgot password?</a>
                                    <input type="submit" name="Sign in" value="Sign in" id="Sign_in"
                                           class="button_drop">
                                    <input type="submit" name="Sign up" value="Sign up" id="Sign_up"
                                           class="button_drop outline">
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
                    <a href="{{URL::to('/')}}"><img src="img/tourbookbd.png" width="160" height="34" alt="City tours"
                                                    data-retina="true" class="logo_normal">
                    </a>
                    <a href="{{URL::to('/')}}"><img src="img/tourbookbd.png" width="160" height="34" alt="City tours"
                                                    data-retina="true" class="logo_sticky">
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
                                        <li><a href="{{URL::to('/')}}">Default slider</a></li>
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
                                <li><a href="{{URL::to('/coming_soon')}}">City Tours</a></li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="{{URL::to('/restaurants')}}">Restaurants {{--<i class="icon-down-open-mini"></i>--}}</a>
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
                            <a href="#" class="search-overlay-menu-btn" data-toggle="dropdown"><i
                                        class="icon-search"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown dropdown-cart">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class=" icon-basket-1"></i>Cart
                                (0) </a>
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

<main>
    <section id="hero" class="login">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6">
                    <div id="login">
                        <div class="text-center"><img src="img/tourbookbd.png" alt="Image" data-retina="true"></div>
                        <hr>
                        <form action="{{route('upload.info')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input class="form-control" name="username" id="username" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control" name="password" id="password" type="password">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input class="form-control" name="password_confirmation" id="password_confirmation"
                                               type="password">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>First name</label>
                                        <input class="form-control" name="first_name" id="first_name" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Last name</label>
                                        <input class="form-control" name="last_name" id="last_name" type="text">
                                    </div>
                                </div>
                            </div>
                            <!-- End row -->

                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" name="email" id="email" type="text">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Phone number</label>
                                        <input class="form-control" name="phone_number" id="phone_number" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Date of birth
                                            <small>(dd/mm/yyyy)</small>
                                        </label>
                                        <input class="form-control" name="date_of_birth" id="date_of_birth" type="text">
                                    </div>
                                </div>
                            </div>
                            <!-- End row -->

                            <hr>
                            <div class="row">

                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Street address</label>
                                        <input class="form-control" name="street_address" id="street_address"
                                               type="text">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>City/Town</label>
                                        <input class="form-control" name="city" id="city" type="text">
                                    </div>
                                </div>
                            </div>
                            <!-- End row -->

                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Zip code</label>
                                        <input class="form-control" name="zip_code" id="zip_code" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <select id="country" class="form-control" name="country">
                                            <option value="bangladesh">Bangladesh</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- End row -->

                            <div class="form-group">
                                <input type="file" name="user_profile" id="user_profile">
                            </div>
                            <div id="pass-info" class="clearfix"></div>
                            <input type="submit" value="Sign Up" class="btn_full">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End main -->

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

<!-- Common scripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>

<!-- Specific scripts -->
<script src="js/pw_strenght.js"></script>

</body>
</html>