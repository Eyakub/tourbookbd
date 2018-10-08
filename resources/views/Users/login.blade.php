<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Citytours - Premium site template for city tours agencies, transfers and tickets.">
    <meta name="author" content="Eyakub">
    <title>TourBookBD - A Place of heaven</title>

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
@include('layouts.header')
<!-- End Header -->

<main>
    <section id="hero" class="login">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                    <div id="login">
                        <div class="text-center"><img src="img/tourbookbd.png" alt="Image" data-retina="true" ></div>
                        <hr>
                        <form>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 login_social">
                                    <a href="#" class="btn btn-primary btn-block"><i class="icon-facebook"></i> Facebook</a>
                                </div>
                                <div class="col-md-6 col-sm-6 login_social">
                                    <a href="#" class="btn btn-info btn-block "><i class="icon-twitter"></i>Twitter</a>
                                </div>
                            </div> <!-- end row -->
                            <div class="login-or"><hr class="hr-or"><span class="span-or">or</span></div>

                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class=" form-control " placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class=" form-control" placeholder="Password">
                            </div>
                            <p class="small">
                                <a href="#">Forgot Password?</a>
                            </p>
                            <a href="#" class="btn_full">Sign in</a>
                            <a href="{{URL::to('/user-registration')}} " class="btn_full_outline">Register</a>
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
        <input value="" name="q" type="search" placeholder="Search..." />
        <button type="submit"><i class="icon_set_1_icon-78"></i>
        </button>
    </form>
</div><!-- End Search Menu -->

<!-- Common scripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>


</body>
</html>