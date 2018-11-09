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
          content="TourBookBD - Single Tour Details.">
    <meta name="author" content="Eyakub">
    <title>{{$tour->tour_title}} - TourBookBD</title>

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
    <link href="https://fonts.googleapis.com/css?family=Gochi+Hand|Lato:300,400|Montserrat:400,400i,700,700i"
          rel="stylesheet">

    <!-- CSS -->
    <link href="{{asset('css/base.css')}}" rel="stylesheet">

    <!-- CSS -->
    <link href="{{asset('css/date_time_picker.css')}}" rel="stylesheet">

    <script type="text/javascript" src="{{ URL::asset('js/html5shiv.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/respond.min.js')}}"></script>


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

<section class="parallax-window" data-parallax="scroll"
         data-image-src="{{asset('storage/large_cover/'.$tour->tour_large_cover)}}" data-natural-width="1400"
         data-natural-height="470">
    <div class="parallax-content-2">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <h1>{{$tour->tour_title}}</h1>
                    <span>{{ $tour->tour_address }}</span>
                    <span class="rating"><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small></span>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div id="price_single_main">
                        from/per person <span><sup>BDT </sup>{{ $tour->tour_adult_price }}</span>
                    </div>
                </div>
            </div>
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
                <li><a href="{{URL::to('/tours')}}">Tours</a>
                </li>
                <li>Single Tours</li>
            </ul>
        </div>
    </div>
    <!-- End Position -->

    <div class="collapse" id="collapseMap">
        <div id="map" class="map"></div>
    </div>
    <!-- End Map -->

    <div class="container margin_60">
        <div class="row">
            <div class="col-md-8" id="single_tour_desc">

                <div id="single_tour_feat">
                    <ul>
                        @if($tour->tour_category === 'Nature & Wildlife')
                            <li><i class="icon_set_2_icon-108"></i>Nature & Wildlife</li>
                        @elseif($tour->tour_category === 'Close To Sea')
                            <li><i class="icon-anchor-2"></i>Close To Sea</li>
                        @elseif($tour->tour_category === 'City Sightseeing')
                            <li><i class="icon_set_1_icon-3"></i>City Sightseeing</li>
                        @elseif($tour->tour_category === 'Museum')
                            <li><i class="icon_set_1_icon-4"></i>Museum</li>
                        @elseif($tour->tour_category === 'Churces')
                            <li><i class="icon_set_1_icon-43"></i>Churces</li>
                        @elseif($tour->tour_category === 'Skyline')
                            <li><i class="icon_set_1_icon-28"></i>Skyline</li>
                        @elseif($tour->tour_category === 'Hiking & Camping')
                            <li><i class="icon-pitch"></i>Hiking & Camping</li>
                        @elseif($tour->tour_category === 'Waterfall')
                            <li><i class="icon-waves"></i>Waterfall</li>
                        @elseif($tour->tour_category === 'Historic Places')
                            <li><i class="icon_set_1_icon-44"></i>Historic Places</li>
                        @endif
                        <li><i class="icon_set_1_icon-83"></i>3 Hours</li>
                        <li><i class="icon_set_1_icon-13"></i>Accessibiliy</li>
                        <li><i class="icon_set_1_icon-82"></i>144 Likes</li>
                        @if($tour->tour_pet_allowed === 1)
                            <li><i class="icon_set_1_icon-22"></i>Pet allowed</li>
                        @endif
                        <li><i class="icon_set_1_icon-29"></i>Tour guide</li>
                    </ul>
                </div>

                <p class="visible-sm visible-xs">
                    <a class="btn_map" data-toggle="collapse" href="#collapseMap"
                       aria-expanded="false" aria-controls="collapseMap"
                       data-text-swap="Hide map" data-text-original="View on map">View on map</a>
                </p>
                <!-- Map button for tablets/mobiles -->

                <div class="row">
                    <div class="col-md-3">
                        <h3>Description</h3>
                    </div>
                    <div class="col-md-9">
                        <p>
                            {{ $tour-> tour_description }}
                        </p>
                        <h4>What's include</h4>
                    {{--<p>
                        Lorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto efficiendi.
                    </p>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <ul class="list_ok">
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>No scripta electram necessitatibus sit</li>
                                <li>Quidam percipitur instructior an eum</li>
                                <li>Ut est saepe munere ceteros</li>
                                <li>No scripta electram necessitatibus sit</li>
                                <li>Quidam percipitur instructior an eum</li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <ul class="list_ok">
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>No scripta electram necessitatibus sit</li>
                                <li>Quidam percipitur instructior an eum</li>
                                <li>No scripta electram necessitatibus sit</li>
                            </ul>
                        </div>
                    </div>--}}
                    <!-- End row  -->
                    </div>
                </div>

                <hr>


                <div class="row">
                    <div class="col-md-3">
                        <h3>Reviews </h3>
                        <a href="#" class="btn_1 add_bottom_30" data-toggle="modal" data-target="#myReview">Leave a
                            review</a>
                    </div>
                    <div class="col-md-9">
                        <div id="general_rating">11 Reviews
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                        class="icon-smile voted"></i><i class="icon-smile"></i><i
                                        class="icon-smile"></i>
                            </div>
                        </div>
                        <!-- End general_rating -->
                        <div class="row" id="rating_summary">
                            <div class="col-md-6">
                                <ul>
                                    <li>Position
                                        <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile voted"></i><i class="icon-smile"></i><i
                                                    class="icon-smile"></i>
                                        </div>
                                    </li>
                                    <li>Tourist guide
                                        <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li>Price
                                        <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile voted"></i><i class="icon-smile"></i><i
                                                    class="icon-smile"></i>
                                        </div>
                                    </li>
                                    <li>Quality
                                        <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile voted"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End row -->
                        <hr>
                        <div class="review_strip_single">
                            <img src="{{asset('img/eyakub.jpg')}}" width="68" height="68" alt="Image"
                                 class="img-circle">
                            <small> - 10 March 2015 -</small>
                            <h4>Eyakub Sorkar</h4>
                            <p>
                                "Beautiful place :p"
                            </p>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                        class="icon-smile voted"></i><i class="icon-smile"></i><i
                                        class="icon-smile"></i>
                            </div>
                        </div>
                        <!-- End review strip -->

                    </div>
                </div>
            </div>
            <!--End  single_tour_desc-->

            <aside class="col-md-4" id="sidebar" style="z-index:999">
                <p class="hidden-sm hidden-xs">
                    <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false"
                       aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on
                        map</a>
                </p>
                <div class="theiaStickySidebar">
                    <div class="box_style_1 expose" id="booking_box">
                        <h3 class="inner">- Booking -</h3>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label><i class="icon-calendar-7"></i> Select a date</label>
                                    <input id="tourDate" class="date-pick form-control" data-date-format="M d, D"
                                           type="text">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label><i class=" icon-clock"></i> Time</label>
                                    <input id="tourTime" class="time-pick form-control" value="12:00 AM" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Adults</label>
                                    <div class="numbers-row">
                                        <input type="text" value="0" id="adultsNo" class="qty2 form-control"
                                               name="booking_adult_no">
                                        <input type="hidden" value="{{$tour->tour_adult_price}}" id="adultPrice">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Children</label>
                                    <div class="numbers-row">
                                        <input type="text" value="0" id="childrensNo" class="qty2 form-control"
                                               name="booking_children_no">
                                        <input type="hidden" value="{{$tour->tour_children_price}}" id="childrenPrice">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <table class="table table_summary">
                            <tbody>
                            <tr>
                                <td>
                                    Adults
                                </td>
                                <td class="text-right">
                                    <span id="showAdultsNo"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Children
                                </td>
                                <td class="text-right">
                                    <span id="showChildrensNo"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Total amount
                                </td>
                                <td class="text-right">
                                    <span id="showTotalAmount"></span>
                                </td>
                            </tr>
                            <tr class="total">
                                <td>
                                    Total cost
                                </td>
                                <td class="text-right">
                                    <span id="showTotalCost"></span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <a class="btn_full" href="{{URL::to('/tours/bookings/carts/')}}">Book now</a>
                        <a class="btn_full_outline" href="#"><i class=" icon-heart"></i> Add to whislist</a>
                    </div>
                    <!--/box_style_1 -->
                </div>
                <!--/end sticky -->
            </aside>
        </div>
        <!--End row -->
    </div>
    <!--End container -->

    <div id="overlay"></div>
    <!-- Mask on input focus -->

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

<!-- Modal Review -->
<div class="modal fade" id="myReview" tabindex="-1" role="dialog" aria-labelledby="myReviewLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myReviewLabel">Write your review</h4>
            </div>
            <div class="modal-body">
                <div id="message-review">
                </div>
                <form method="post" action="assets/review_tour.php" name="review_tour" id="review_tour">
                    <input name="tour_name" id="tour_name" type="hidden" value="Paris Arch de Triomphe Tour">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input name="name_review" id="name_review" type="text" placeholder="Your name"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input name="lastname_review" id="lastname_review" type="text"
                                       placeholder="Your last name" class="form-control">
                            </div>
                        </div>
                    </div>
                    <!-- End row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input name="email_review" id="email_review" type="email" placeholder="Your email"
                                       class="form-control">
                            </div>
                        </div>
                    </div>
                    <!-- End row -->
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Position</label>
                                <select class="form-control" name="position_review" id="position_review">
                                    <option value="">Please review</option>
                                    <option value="Low">Low</option>
                                    <option value="Sufficient">Sufficient</option>
                                    <option value="Good">Good</option>
                                    <option value="Excellent">Excellent</option>
                                    <option value="Superb">Super</option>
                                    <option value="Not rated">I don't know</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tourist guide</label>
                                <select class="form-control" name="guide_review" id="guide_review">
                                    <option value="">Please review</option>
                                    <option value="Low">Low</option>
                                    <option value="Sufficient">Sufficient</option>
                                    <option value="Good">Good</option>
                                    <option value="Excellent">Excellent</option>
                                    <option value="Superb">Super</option>
                                    <option value="Not rated">I don't know</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- End row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Price</label>
                                <select class="form-control" name="price_review" id="price_review">
                                    <option value="">Please review</option>
                                    <option value="Low">Low</option>
                                    <option value="Sufficient">Sufficient</option>
                                    <option value="Good">Good</option>
                                    <option value="Excellent">Excellent</option>
                                    <option value="Superb">Super</option>
                                    <option value="Not rated">I don't know</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Quality</label>
                                <select class="form-control" name="quality_review" id="quality_review">
                                    <option value="">Please review</option>
                                    <option value="Low">Low</option>
                                    <option value="Sufficient">Sufficient</option>
                                    <option value="Good">Good</option>
                                    <option value="Excellent">Excellent</option>
                                    <option value="Superb">Super</option>
                                    <option value="Not rated">I don't know</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- End row -->
                    <div class="form-group">
                        <textarea name="review_text" id="review_text" class="form-control" style="height:100px"
                                  placeholder="Write your review"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" id="verify_review" class=" form-control"
                               placeholder="Are you human? 3 + 1 =">
                    </div>
                    <input type="submit" value="Submit" class="btn_1" id="submit-review">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End modal review -->

<!-- Common scripts -->
<script src="{{URL::asset('js/jquery-2.2.4.min.js')}}"></script>
<script src="{{URL::asset('js/common_scripts_min.js')}}"></script>
<script src="{{URL::asset('js/functions.js')}}"></script>

{{--calculating js--}}
<script src="{{URL::asset('assets/js/calculation.js')}}"></script>

<!-- Specific scripts -->
<script src="{{URL::asset('js/icheck.js')}}"></script>
<script>
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-grey',
        radioClass: 'iradio_square-grey'
    });
</script>

<!-- Date and time pickers -->
<script src="{{URL::asset('js/bootstrap-datepicker.js')}}"></script>
<script src="{{URL::asset('js/bootstrap-timepicker.js')}}"></script>
<script>
    $('input.date-pick').datepicker('setDate', 'today');
    $('input.time-pick').timepicker({
        minuteStep: 15,
        showInpunts: false
    })
</script>

<!--Review modal validation -->
<script src="{{URL::asset('assets/validate.js')}}"></script>

<!-- Map -->
<script src="http://maps.googleapis.com/maps/api/js"></script>


<script src="{{URL::asset('js/map.js')}}"></script>
<script src="{{URL::asset('js/infobox.js')}}"></script>

<!-- Fixed sidebar -->
<script src="{{URL::asset('js/theia-sticky-sidebar.js')}}"></script>
<script>
    jQuery('#sidebar').theiaStickySidebar({
        additionalMarginTop: 80
    });
</script>

</body>

</html>