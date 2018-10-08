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

    <meta name="description"
          content="Citytours - Premium site template for city tours agencies, transfers and tickets.">
    <meta name="author" content="Ansonika">
    <title>TourBookBD - A place of natural beauty</title>

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

<section class="parallax-window" data-parallax="scroll" data-image-src="img/1000x1500-1.jpg" data-natural-width="1400"
         data-natural-height="470">
    <div class="parallax-content-1">
        <div class="animated fadeInDown">
            <h1>Paris tours</h1>
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
                <li>All Tour</li>
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
                    <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false"
                       aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on
                        map</a>
                </p>

                <div class="box_style_cat">
                    <ul id="cat_nav">
                        <li><a href="#" id="active"><i class="icon_set_1_icon-51"></i>All tours <span>(141)</span></a>
                        </li>
                        <li><a href="#"><i class="icon_set_1_icon-3"></i>City sightseeing <span>(20)</span></a>
                        </li>
                        <li><a href="#"><i class="icon_set_1_icon-4"></i>Museum tours <span>(16)</span></a>
                        </li>
                        <li><a href="#"><i class="icon_set_1_icon-44"></i>Historic Buildings <span>(12)</span></a>
                        </li>
                        <li><a href="#"><i class="icon_set_1_icon-37"></i>Walking tours <span>(11)</span></a>
                        </li>
                        <li><a href="#"><i class="icon_set_1_icon-14"></i>Eat & Drink <span>(20)</span></a>
                        </li>
                        <li><a href="#"><i class="icon_set_1_icon-43"></i>Churces <span>(08)</span></a>
                        </li>
                        <li><a href="#"><i class="icon_set_1_icon-28"></i>Skyline tours <span>(11)</span></a>
                        </li>
                    </ul>
                </div>

                <div id="filters_col">
                    <a data-toggle="collapse" href="#collapseFilters" aria-expanded="false"
                       aria-controls="collapseFilters" id="filters_col_bt"><i class="icon_set_1_icon-65"></i>Filters <i
                                class="icon-plus-1 pull-right"></i></a>
                    <div class="collapse" id="collapseFilters">
                        <div class="filter_type">
                            <h6>Price</h6>
                            <input type="text" id="range" name="range" value="">
                        </div>
                        <div class="filter_type">
                            <h6>Rating</h6>
                            <ul>
                                <li>
                                    <label>
                                        <input type="checkbox"><span class="rating">
						<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile voted"></i><i class="icon-smile voted"></i>
						</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox"><span class="rating">
						<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile voted"></i><i class="icon-smile"></i>
						</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox"><span class="rating">
						<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile"></i><i class="icon-smile"></i>
						</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox"><span class="rating">
						<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i
                                                    class="icon-smile"></i><i class="icon-smile"></i>
						</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox"><span class="rating">
						<i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i
                                                    class="icon-smile"></i><i class="icon-smile"></i>
						</span>
                                    </label>
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
                                        <input type="checkbox">Groups allowed</label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox">Tour guides</label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox">Access for disabled</label>
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
                            <a href="#" class="bt_filters"><i class="icon-th"></i></a> <a href="all_tours_list.html"
                                                                                          class="bt_filters"><i
                                        class=" icon-list"></i></a>
                        </div>
                    </div>
                </div>
                <!--End tools -->


                @yield('content_of_tours')


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
<!-- Cat nav mobile -->
<script src="js/cat_nav_mobile.js"></script>
<script>
    $('#cat_nav').mobileMenu();
</script>
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


<script src="js/map.js"></script>
<script src="js/infobox.js"></script>

</body>

</html>