<!-- Header================================================== -->
<header>
    <div id="top_line">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6"><i class="icon-phone"></i><strong>+8801937424217 </strong></div>

                <div class="col-md-6 col-sm-6 col-xs-6">
                    <ul id="top_links">
                        {{--<li>--}}
                        @if(!empty(Session::get('id')))
                            {{Session::get('name')}}<a href="{{URL::to('logout')}}">Logout</a>
                        @else
                            <a href="{{URL::to('/user-login')}}" id="access_link">Sign in </a>
                        @endif

                            {{--<div class="dropdown dropdown-access">
                                <div class="dropdown-menu">
                                    <h4 align="center">TourBookBD</h4>
                                    --}}{{--<div class="row">--}}{{--
                                        --}}{{--<div class="col-md-6 col-sm-6 col-xs-6">--}}{{--
                                            --}}{{--<a href="#" class="bt_facebook">--}}{{--
                                                --}}{{--<i class="icon-facebook"></i>Facebook </a>--}}{{--
                                        --}}{{--</div>--}}{{--
                                        --}}{{--<div class="col-md-6 col-sm-6 col-xs-6">--}}{{--
                                            --}}{{--<a href="#" class="bt_paypal">--}}{{--
                                                --}}{{--<i class="icon-paypal"></i>Paypal </a>--}}{{--
                                        --}}{{--</div>--}}{{--
                                    --}}{{--</div>--}}{{--
                                    --}}{{--<div class="login-or">--}}{{--
                                        --}}{{--<hr class="hr-or">--}}{{--
                                        --}}{{--<span class="span-or">or</span>--}}{{--
                                    --}}{{--</div>--}}{{--
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="inputUsernameEmail"
                                               placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="inputPassword"
                                               placeholder="Password">
                                    </div>
                                    <a id="forgot_pw">Forgot password?</a>
                                    <input type="submit" name="Sign_in" value="Sign In" id="Sign_in"
                                           class="button_drop">
                                    <input type="submit" name="Sign_up" value="Sign up" id="Sign_up"
                                           class="button_drop outline">
                                </div>
                            </div><!-- End Dropdown access -->--}}
                        {{--</li>--}}
                        <li><a href="wishlist.html" id="wishlist_link">Wishlist</a></li>
                        {{--<li><a href="http://themeforest.net/item/citytours-city-tours-tour-tickets-and-guides/10715647?ref=ansonika">Purchase this template</a></li>--}}
                    </ul>
                </div>
            </div><!-- End row -->
        </div><!-- End container-->
    </div><!-- End top line-->

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-3">
                <div id="logo_home">
                    <h1><a href={{URL::to('/')}} title="Tour Book BD">Tour Book BD</a></h1>
                </div>
            </div>
            <nav class="col-md-9 col-sm-9 col-xs-9">
                <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                <div class="main-menu">
                    <div id="header_menu">
                        <img src="{{asset('img/tourbookbd.png')}}" width="160" height="34" alt="City tours" data-retina="true">
                    </div>
                    <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                    <ul>
                        <li class="submenu">
                            <a href={{URL::to('/')}} class="show-submenu">Home </a>
                            {{--<ul>
                                <li><a href="javascript:void(0);">Revolution slider</a>
                                    <ul>
                                        <li><a href="index.html">Default slider</a></li>
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
                                <li><a href="{{URL::to('/hotels')}}">All hotels</a></li>
                                <li><a href="{{URL::to('/resorts')}}">All Resorts</a></li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href={{--javascript:void(0);--}}{{URL::to('/blogs')}}>Tour Blog {{--<i class="icon-down-open-mini"></i>--}}</a>
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
                                    <div class="image"><img src="{{asset('img/thumb_cart_1.jpg')}}" alt="image"></div>
                                    <strong>
                                        <a href="#">Louvre museum</a>1x $36.00 </strong>
                                    <a href="#" class="action"><i class="icon-trash"></i></a>
                                </li>
                                <li>
                                    <div class="image"><img src="{{asset('img/thumb_cart_2.jpg')}}" alt="image"></div>
                                    <strong>
                                        <a href="#">Versailles tour</a>2x $36.00 </strong>
                                    <a href="#" class="action"><i class="icon-trash"></i></a>
                                </li>
                                <li>
                                    <div class="image"><img src="{{asset('img/thumb_cart_3.jpg')}}" alt="image"></div>
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
    </div><!-- container -->
</header><!-- End Header -->