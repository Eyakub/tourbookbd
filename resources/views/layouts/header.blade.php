<!-- Header================================================== -->
<header>
    <div id="top_line">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6"><i class="icon-phone"></i><strong>+8801937424217 </strong></div>

                <div class="col-md-6 col-sm-6 col-xs-6">
                    <ul id="top_links">
                        @if(!empty(Session::get('id')))
                            <li>
                                <a href="{{URL::to('/user-profile/'.(Session::get('username')))}}">{{Session::get('name')}}</a>
                            </li>
                            <li>
                                <a href="{{URL::to('/logout')}}">Logout</a>
                            </li>
                        @else
                            <li><a href="{{URL::to('/user-login')}}">Sign In</a></li>
                            <li><a href="{{URL::to('/user-registration')}}">Sign Up</a> </li>
                        @endif
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
                        <img src="{{asset('img/tourbookbd.png')}}" width="160" height="34" alt="City tours"
                             data-retina="true">
                    </div>
                    <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                    <ul>
                        <li class="submenu">
                            <a href={{URL::to('/')}} class="show-submenu">Home </a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="show-submenu">Tours <i class="icon-down-open-mini"></i></a>
                            <ul>
                                <li><a href="{{URL::to('/tours')}}">All tours list</a></li>
                                <li><a href="{{URL::to('/coming_soon')}}">Popular List</a></li>
                                <li><a href="{{URL::to('/coming_soon')}}">Top Rated List</a></li>
                                {{--<li><a href="javascript:void(0);">Single tour fixed sidebar</a>
                                    <ul>
                                        <li><a href="single_tour_fixed_sidebar.html">Single tour fixed sidebar</a></li>
                                        <li><a href="single_tour_with_gallery_fixed_sidebar.html">Single tour 2 Fixed Sidebar</a></li>
                                        <li><a href="cart_fixed_sidebar.html">Cart Fixed Sidebar</a></li>
                                        <li><a href="payment_fixed_sidebar.html">Payment Fixed Sidebar</a></li>
                                        <li><a href="confirmation_fixed_sidebar.html">Confirmation Fixed Sidebar</a></li>
                                    </ul>
                                </li>--}}
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
                            <a href={{--javascript:void(0);--}}{{URL::to('/blogs')}}>Tour
                                Blog {{--<i class="icon-down-open-mini"></i>--}}</a>
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
                            @if(!empty(Session::get('id')))
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                            class=" icon-bell"></i>Notifications
                                    (3) </a>
                                <ul class="dropdown-menu" id="cart_items">
                                    <li>
                                        <div class="image"><img src="{{asset('img/thumb_cart_1.jpg')}}" alt="image">
                                        </div>
                                        <strong>
                                            <a href="#">comment on your post</a></strong>
                                    </li>
                                    <li>
                                        <div class="image"><img src="{{asset('img/thumb_cart_1.jpg')}}" alt="image">
                                        </div>
                                        <strong>
                                            <a href="#">comment on your post</a></strong>
                                    </li>
                                    <li>
                                        <div class="image"><img src="{{asset('img/thumb_cart_1.jpg')}}" alt="image">
                                        </div>
                                        <strong>
                                            <a href="#">comment on your post</a></strong>
                                    </li>
                                    {{--<li>
                                        <div>Total: <span>$120.00</span></div>
                                        <a href="cart.html" class="button_drop">Go to cart</a>
                                        <a href="payment.html" class="button_drop outline">Check out</a>
                                    </li>--}}
                                </ul>
                            @endif
                        </div><!-- End dropdown-cart-->
                    </li>
                </ul>
            </nav>
        </div>
    </div><!-- container -->
</header><!-- End Header -->