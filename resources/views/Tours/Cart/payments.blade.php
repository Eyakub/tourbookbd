<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="TourBookBD -  a natural beauty of Bangladesh.">
    <meta name="author" content="Eyakub">
    <title>TourBookBD</title>

    <!-- Favicons-->
    @include('layouts.baricon')

    <!-- Google web fonts -->
    <link href="https://fonts.googleapis.com/css?family=Gochi+Hand|Lato:300,400|Montserrat:400,400i,700,700i" rel="stylesheet">

    <!-- CSS -->
    <link href="{{asset('css/base.css')}}" rel="stylesheet">

    <!-- Radio and check inputs -->
    <link href="{{asset('css/skins/square/grey.css')}}" rel="stylesheet">

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

<section id="hero_2">
    <div class="intro_title animated fadeInDown">
        <h1>Place your order</h1>
        <div class="bs-wizard">

            <div class="col-xs-4 bs-wizard-step complete">
                <div class="text-center bs-wizard-stepnum">Your cart</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a href="cart.html" class="bs-wizard-dot"></a>
            </div>

            <div class="col-xs-4 bs-wizard-step active">
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
                <a href="confirmation_fixed_sidebar.html" class="bs-wizard-dot"></a>
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
                <li><a href="#">Category</a>
                </li>
                <li>Page active</li>
            </ul>
        </div>
    </div>
    <!-- End position -->


    <div class="container margin_60">
        <div class="row">
            <div class="col-md-8 add_bottom_15">
                <div class="form_title">
                    <h3><strong>1</strong>Your Details</h3>
                    <p>
                        Mussum ipsum cacilds, vidis litro abertis.
                    </p>
                </div>
                <div class="step">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>First name</label>
                                <input type="text" class="form-control" id="firstname_booking" name="firstname_booking">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Last name</label>
                                <input type="text" class="form-control" id="lastname_booking" name="lastname_booking">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" id="email_booking" name="email_booking" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Confirm email</label>
                                <input type="email" id="email_booking_2" name="email_booking_2" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Telephone</label>
                                <input type="text" id="telephone_booking" name="telephone_booking" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <!--End step -->

                <div class="form_title">
                    <h3><strong>2</strong>Payment Information</h3>
                    <p>
                        Mussum ipsum cacilds, vidis litro abertis.
                    </p>
                </div>
                <div class="step">
                    <div class="form-group">
                        <label>Name on card</label>
                        <input type="text" class="form-control" id="name_card_bookign" name="name_card_bookign">
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Card number</label>
                                <input type="text" id="card_number" name="card_number" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <img src="img/cards.png" width="207" height="43" alt="Cards" class="cards">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Expiration date</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="expire_month" name="expire_month" class="form-control" placeholder="MM">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="expire_year" name="expire_year" class="form-control" placeholder="Year">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Security code</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" id="ccv" name="ccv" class="form-control" placeholder="CCV">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <img src="img/icon_ccv.gif" width="50" height="29" alt="ccv"><small>Last 3 digits</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End row -->

                    <hr>

                    <h4>Or checkout with Paypal</h4>
                    <p>
                        Lorem ipsum dolor sit amet, vim id accusata sensibus, id ridens quaeque qui. Ne qui vocent ornatus molestie, reque fierent dissentiunt mel ea.
                    </p>
                    <p>
                        <img src="img/paypal_bt.png" alt="Image">
                    </p>
                </div>
                <!--End step -->

                <div class="form_title">
                    <h3><strong>3</strong>Billing Address</h3>
                    <p>
                        Mussum ipsum cacilds, vidis litro abertis.
                    </p>
                </div>
                <div class="step">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Country</label>
                                <select class="form-control" name="country" id="country">
                                    <option value="" selected>Select your country</option>
                                    <option value="Europe">Europe</option>
                                    <option value="United states">United states</option>
                                    <option value="Asia">Asia</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Street line 1</label>
                                <input type="text" id="street_1" name="street_1" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Street line 2</label>
                                <input type="text" id="street_2" name="street_2" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" id="city_booking" name="city_booking" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>State</label>
                                <input type="text" id="state_booking" name="state_booking" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Postal code</label>
                                <input type="text" id="postal_code" name="postal_code" class="form-control">
                            </div>
                        </div>
                    </div>
                    <!--End row -->
                </div>
                <!--End step -->

                <div id="policy">
                    <h4>Cancellation policy</h4>
                    <div class="form-group">
                        <label>
                            <input type="checkbox" name="policy_terms" id="policy_terms">I accept terms and conditions and general policy.</label>
                    </div>
                    <a href="{{URL::to('/tours/bookings/carts/payments/confirmation')}}" class="btn_1 green medium">Book now</a>
                </div>
            </div>

            <aside class="col-md-4" id="sidebar">
                <div class="theiaStickySidebar">
                    <div class="box_style_1" id="booking_box">
                        <h3 class="inner">- Summary -</h3>
                        <table class="table table_summary">
                            <tbody>
                            <tr>
                                <td>
                                    Adults
                                </td>
                                <td class="text-right">
                                    2
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Children
                                </td>
                                <td class="text-right">
                                    0
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Dedicated tour guide
                                </td>
                                <td class="text-right">
                                    $34
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Insurance
                                </td>
                                <td class="text-right">
                                    $34
                                </td>
                            </tr>
                            <tr class="total">
                                <td>
                                    Total cost
                                </td>
                                <td class="text-right">
                                    $154
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <a class="btn_full" href="{{URL::to('/tours/bookings/carts/payments/confirmation')}}">Book now</a>
                        <a class="btn_full_outline" href="#"><i class="icon-right"></i> Continue shopping</a>
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
        <input value="" name="q" type="search" placeholder="Search..." />
        <button type="submit"><i class="icon_set_1_icon-78"></i>
        </button>
    </form>
</div><!-- End Search Menu -->

<!-- Common scripts -->
<script src="{{URL::asset('js/jquery-2.2.4.min.js')}}"></script>
<script src="{{URL::asset('js/common_scripts_min.js')}}"></script>
<script src="{{URL::asset('js/functions.js')}}"></script>

<!-- Specific scripts -->
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