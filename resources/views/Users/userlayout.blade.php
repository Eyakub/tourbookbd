<!DOCTYPE html>
<!--[if IE 8]>
<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>
<html class="ie ie9"> <![endif]-->
<html lang="en">

<head>
    @include('layouts.metadata')
    <title>{{$user->first_name}} - TourBookBD</title>

    <!-- Favicons-->
@include('layouts.baricon')

<!-- Google web fonts -->
    <link href="https://fonts.googleapis.com/css?family=Gochi+Hand|Lato:300,400|Montserrat:400,400i,700,700i"
          rel="stylesheet">

    <!-- CSS -->
    <link href="{{URL::asset('css/base.css')}}" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="{{URL::asset('css/admin.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/jquery.switch.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/statusbox.css')}}" rel="stylesheet">
    <link href="{{asset('css/blog.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::to('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css')}}"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <script src="{{URL::to('js/html5shiv.min.js')}}"></script>
    <script src="{{URL::to('js/respond.min.js')}}"></script>
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


<section class="parallax-window" data-parallax="scroll"
         data-image-src="{{asset('storage/marc-zimmer-421611-unsplash.jpg')}}" data-natural-width="1400"
         data-natural-height="470">
    <div class="parallax-content-1">
        <div class="animated fadeInDown">
            <h1>Hello {{$user->first_name}}</h1>
            <p>This is your personal property, do whatever you want.</p>
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
                <li><a href="#">User</a>
                </li>
                <li>{{$user->first_name}}</li>
            </ul>
        </div>
    </div>
    <!-- End Position -->

    <div class="margin_60 container">
        <div id="tabs" class="tabs">
            <nav>
                <ul>
                    <li>
                        <a href="#profile"
                           class="icon-profile"><span>Profile</span></a>
                    </li>
                    <li>
                        <a href="#timeline" class="icon-profile"><span>Timeline</span></a>
                    </li>
                    <li>
                        <a href="#wishlist" class="icon-wishlist"><span>Wishlist</span></a>
                    </li>
                    <li>
                        <a href="#settings" class="icon-settings"><span>Settings</span></a>
                    </li>
                    <li>
                        <a href="#bookings" class="icon-booking"><span>Bookings</span></a>
                    </li>
                    <li>
                        <a href="#events" class="icon-eventful"><span>Events</span></a>
                    </li>
                </ul>
            </nav>
            <div class="content">


                <section id="profile">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <h4>Your profile</h4>
                            <ul id="profile_summary">
                                <li>Username <span>{{$user->username}}</span>
                                </li>
                                <li>First name <span>{{$user->first_name}}</span>
                                </li>
                                <li>Last name <span>{{$user->last_name}}</span>
                                </li>
                                <li>Phone number <span>{{$user->phone_number}}</span>
                                </li>
                                <li>Date of birth <span>{{$user->date_of_birth}}</span>
                                </li>
                                <li>Street address <span>{{$user->street_address}}</span>
                                </li>
                                <li>Town/City <span>{{$user->city}}</span>
                                </li>
                                <li>Zip code <span>{{$user->zip_code}}</span>
                                </li>
                                <li>Country <span>{{$user->country}}</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <img src="{{asset('storage/user_images/'.$user->src_user)}}" height="250" width="250"
                                 alt="Image"
                                 class="img-responsive styled profile_pic">
                        </div>
                    </div>
                    <!-- End row -->

                    <div class="divider"></div>
                    <form action="{{route('update-user.info')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Edit profile</h4>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>First name</label>
                                    <input class="form-control" name="first_name" value="{{$user->first_name}}"
                                           type="text">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Last name</label>
                                    <input class="form-control" name="last_name" value="{{$user->last_name}}"
                                           type="text">
                                </div>
                            </div>
                        </div>
                        <!-- End row -->

                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Phone number</label>
                                    <input class="form-control" name="phone_number" value="{{$user->phone_number}}"
                                           id="email_2" type="text">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Date of birth
                                        <small>(dd/mm/yyyy)</small>
                                    </label>
                                    <input class="form-control" name="date_of_birth" value="{{$user->date_of_birth}}"
                                           id="email" type="text">
                                </div>
                            </div>
                        </div>
                        <!-- End row -->

                        <hr>

                        <div class="row">
                            <div class="col-md-12">
                                <h4>Edit address</h4>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Street address</label>
                                    <input class="form-control" name="street_address" value="{{$user->street_address}}"
                                           id="first_name" type="text">
                                    <input type="hidden" value="{{$user->id}}" name="user_id">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>City/Town</label>
                                    <input class="form-control" name="city" value="{{$user->city}}" id="last_name"
                                           type="text">
                                </div>
                            </div>
                        </div>
                        <!-- End row -->

                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Zip code</label>
                                    <input class="form-control" name="zip_code" value="{{$user->zip_code}}" id="email"
                                           type="text">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Country</label>
                                    <select id="country" class="form-control" name="country">
                                        <option value="{{$user->country}}">{{$user->country}}</option>
                                        @foreach($country as $c)
                                            <option value="{{$c->country_name}}">{{$c->country_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- End row -->

                        <hr>
                        <h4>Upload profile photo</h4>
                        <div class="form-inline upload_1">
                            <div class="form-group">
                                <input type="file" name="src_user" id="file-input">
                                <input class="form-control-file" value="{{$user->src_user}}"
                                       name="src_user_old" type="hidden">
                            </div>
                        </div>
                        <hr>
                        <input type="submit" class="btn_1 green" value="Update Profile">
                    </form>
                    <br>
                    @if(Session::has('success'))
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-success">
                                    {{Session::get('success')}}
                                </div>
                            </div>
                        </div>
                    @endif

                <!-- Hidden on mobiles -->
                    {{--<div class="hidden-xs">
                        <!-- Drop Zone -->
                        <h5>Or drag and drop files below</h5>
                        <div class="upload-drop-zone" id="drop-zone">
                            Just drag and drop files here
                        </div>
                        <!-- Progress Bar -->
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 60%;">
                                <span class="sr-only">60% Complete</span>
                            </div>
                        </div>
                        <!-- Upload Finished -->
                        <div class="js-upload-finished">
                            <h5>Processed files</h5>
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-success"><span
                                            class="badge alert-success pull-right">Success</span>image-01.jpg</a>
                            </div>
                        </div>
                        <!-- End Hidden on mobiles -->
                    </div>--}}

                </section>
                <!-- End section 4 -->

                <section id="timeline">
                    <div class="row" style="padding-bottom: 25px; padding-left: 30px; padding-right: 40px">


                        <div class="row">
                            <form action="{{route('blog.save')}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="col-md-9 col-xs-12" id="new_status">
                                    <ul class="navbar-nav col-md-9 col-xs-12" id="post_header" role="navigation">
                                        <h5>Post</h5>
                                        {{--@if(Session::has('message'))
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="alert alert-success">
                                                        {{Session::get('message')}}
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                        @endif--}}
                                        {{--<li><a href="#"><span class="glyphicon glyphicon-pencil"></span>Update Status</a></li>--}}
                                        {{--<li><a href="#"><span class="glyphicon glyphicon-picture"></span>Add Photos/Video</a></li>--}}
                                        {{--<li><a href="#"><span class="glyphicon glyphicon-th"></span>Create Photo Album</a></li>--}}
                                    </ul>
                                    <div class="col-md-8 col-xs-8" id="post_content">
                                        <Input type="hidden" value="{{$user->id}}" name="user_id">
                                        <Input type="hidden" value="{{$user->username}}" name="username">
                                        <img alt="profile picture" class="col-xs-1"
                                             src="{{asset('storage/user_images/'.$user->src_user)}}">
                                        <div class="textarea_wrap">
                                            <textarea class="col-md-12"
                                                      name="blog_desc"
                                                      placeholder="What's on your mind?"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-xs-12" id="post_footer">
                                        <ul class="navbar-nav col-md-6 col-xs-6">
                                            <li><a href="#"><span><input type="file" name="blog_img[]"
                                                                         multiple/></span></a></li>
                                        </ul>
                                        <div class="col-md-6 col-xs-6">
                                            <select name="blog_category"
                                                    class="btn btn-primary dropdown dropdown-toggle"
                                                    style="height: 24px">
                                                <option value="None">Select Category</option>
                                                <option value="None">None</option>
                                            </select>
                                            <select name="blog_status"
                                                    class="btn btn-primary btn-xs dropdown dropdown-toggle"
                                                    style="height: 24px">
                                                <option value="1">Public</option>
                                                <option value="0">Only Me</option>
                                            </select>
                                            <button type="submit" class="btn btn-primary">Post</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-9">
                            <div class="box_style_1">

                                @foreach($blogs as $blog)
                                    <div class="post">
                                        @if(count($blog->images) !== 0)
                                            <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                                                <!-- Indicators -->
                                                <ol class="carousel-indicators">
                                                    @foreach($blog->images as $img)
                                                        <li data-target="#myCarousel1" data-slide-to="{{$loop->index}}"
                                                            class="{{$loop->first? 'active': ''}}"></li>
                                                    @endforeach
                                                </ol>

                                                <!-- Wrapper for slides -->
                                                <div class="carousel-inner" role="listbox">
                                                    @foreach($blog->images as $img)
                                                        <div class="item {{$loop->first? 'active': ''}}">
                                                            <img src="{{asset('storage/blog_img/'.$img->blog_img)}}"
                                                                 alt="Image"
                                                                 class="img-responsive"
                                                                 style="width: 110%;">
                                                        </div>
                                                    @endforeach

                                                </div>

                                                <!-- Left and right controls -->
                                                <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="right carousel-control" href="#myCarousel1" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        @endif

                                        {{--@foreach($blog->images as $img)
                                            <img src="{{asset('storage/blog_img/'.$img->blog_img)}}"
                                                 alt="Image"
                                                 class="img-responsive" height="68" width="68">
                                        @endforeach--}}

                                        <div class="post_info clearfix">
                                            <div class="post-left">
                                                <ul>
                                                    <li><i class="icon-calendar-empty"></i> On <span>12 Nov 2020</span>
                                                    </li>
                                                    <li><i class="icon-inbox-alt"></i> In <a href="#">Top tours</a>
                                                    </li>
                                                    <li><i class="icon-tags"></i> Tags <a href="#">Works</a>, <a
                                                                href="#">Public</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="post-right"><i class="icon-comment"></i><a
                                                        href="#">{{count($blog->comment)}} </a>
                                            </div>
                                        </div>
                                        {{--<h2>Duis aute irure dolor in reprehenderit</h2>--}}
                                        <p>
                                            <?php
                                            $str = $blog->blog_desc;
                                            ?>
                                            {{str_limit($str, 250, '...')}}
                                        </p>
                                        <a href="{{URL::to('/user-profile/'.$user->username.'/blog-details/'.$blog->id)}}"
                                           target="_blank" class="btn_1">Read
                                            more</a>
                                    </div>
                                    <hr>
                                @endforeach

                            </div>

                            <div class="text-center">
                                <ul class="pagination">
                                    {!! $blogs-> links() !!}
                                </ul>
                                <!-- end pagination-->
                            </div>
                        </div>
                        <!-- End col-md-8-->
                    </div>

                </section>

                <section id="wishlist">
                    <div class="row">
                        @foreach($tours as $tour)
                            <div class="col-md-4 col-sm-6">
                                <div class="tour_container">
                                    <div class="img_container">
                                        <a href="{{URL::to('/tours/single-tour/'.$tour->id)}}">
                                            <img src="{{asset('storage/small_cover/'.$tour->tour_small_cover)}}"
                                                 width="800"
                                                 height="533"
                                                 class="img-responsive" alt="Image">
                                            {{--<div class="ribbon top_rated">
                                            </div>--}}
                                        </a>
                                    </div>
                                    <div class="tour_title">
                                        <h3><strong>{{$tour->tour_title}}</strong></h3>
                                        <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile"></i>
                                            <small>(0)</small>
                                        </div>
                                        <!-- end rating -->
                                        <a href="{{URL::to('/tour-removewishlist/'.$tour->id)}}">
                                            <div class="wishlist_close_admin">-</div>
                                        </a>
                                    </div>
                                </div>
                                <!-- End box tour -->
                            </div>
                            <!-- End col-md-6 -->
                        @endforeach

                    </div>
                    <!-- End row -->
                    <button type="submit" class="btn_1 green">Update wishlist</button>
                </section>
                <!-- End section 2 -->

                <section id="settings">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 add_bottom_30">
                            <h4>Change your password</h4>
                            <div class="form-group">
                                <label>Old password</label>
                                <input class="form-control" name="old_password" id="old_password" type="password">
                            </div>
                            <div class="form-group">
                                <label>New password</label>
                                <input class="form-control" name="new_password" id="new_password" type="password">
                            </div>
                            <div class="form-group">
                                <label>Confirm new password</label>
                                <input class="form-control" name="confirm_new_password" id="confirm_new_password"
                                       type="password">
                            </div>
                            <button type="submit" class="btn_1 green">Update Password</button>
                        </div>
                        <div class="col-md-6 col-sm-6 add_bottom_30">
                            <h4>Change your email</h4>
                            <div class="form-group">
                                <label>Old email</label>
                                <input class="form-control" name="old_password" id="old_password" type="password">
                            </div>
                            <div class="form-group">
                                <label>New email</label>
                                <input class="form-control" name="new_password" id="new_password" type="password">
                            </div>
                            <div class="form-group">
                                <label>Confirm new email</label>
                                <input class="form-control" name="confirm_new_password" id="confirm_new_password"
                                       type="password">
                            </div>
                            <button type="submit" class="btn_1 green">Update Email</button>
                        </div>
                    </div>
                    <!-- End row -->

                    <hr>
                    <br>
                    <div class="row">
                        {{--<div class="col-md-6 col-sm-6">
                            <h4>Notification settings</h4>
                            <table class="table table-striped options_cart">
                                <tbody>
                                <tr>
                                    <td style="width:10%">
                                        <i class="icon_set_1_icon-33"></i>
                                    </td>
                                    <td style="width:60%">
                                        New TourBookBD Tours
                                    </td>
                                    <td style="width:35%">
                                        <label class="switch-light switch-ios pull-right">
                                            <input type="checkbox" name="option_1" id="option_1" checked value="">
                                            <span>
							<span>No</span>
													<span>Yes</span>
													</span>
                                            <a></a>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="icon_set_1_icon-6"></i>
                                    </td>
                                    <td>
                                        New TourBookBD Hotels
                                    </td>
                                    <td>
                                        <label class="switch-light switch-ios pull-right">
                                            <input type="checkbox" name="option_2" id="option_2" value="">
                                            <span>
							<span>No</span>
													<span>Yes</span>
													</span>
                                            <a></a>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="icon_set_1_icon-26"></i>
                                    </td>
                                    <td>
                                        New TourBookBD Transfers
                                    </td>
                                    <td>
                                        <label class="switch-light switch-ios pull-right">
                                            <input type="checkbox" name="option_3" id="option_3" value="" checked>
                                            <span>
							<span>No</span>
													<span>Yes</span>
													</span>
                                            <a></a>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="icon_set_1_icon-81"></i>
                                    </td>
                                    <td>
                                        New TourBookBD special offers
                                    </td>
                                    <td>
                                        <label class="switch-light switch-ios pull-right">
                                            <input type="checkbox" name="option_4" id="option_4" value="">
                                            <span>
							<span>No</span>
													<span>Yes</span>
													</span>
                                            <a></a>
                                        </label>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <button type="submit" class="btn_1 green">Update notifications settings</button>
                        </div>--}}
                    </div>
                    <!-- End row -->
                </section>
                <!-- End section 3 -->

                <section id="bookings">
                    <div id="tools">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="styled-select-filters">
                                    <select name="sort_type" id="sort_type">
                                        <option value="" selected>Sort by type</option>
                                        <option value="tours">Tours</option>
                                        <option value="hotels">Hotels</option>
                                        <option value="transfers">Transfers</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="styled-select-filters">
                                    <select name="sort_date" id="sort_date">
                                        <option value="" selected>Sort by date</option>
                                        <option value="oldest">Oldest</option>
                                        <option value="recent">Recent</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/tools -->

                    @foreach($booking as $book)
                        <div class="strip_booking">
                            <div class="row">
                                <div class="col-md-2 col-sm-2">
                                    <div class="date">
                                        <span class="month">{{Carbon\Carbon::parse($book->booking_travel_date)->format('F')}}</span>
                                        <span class="day">
                                            <strong>{{Carbon\Carbon::parse($book->booking_travel_date)->format('d')}}</strong>
                                            {{Carbon\Carbon::parse($book->booking_travel_date)->format('l')}}</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-5">
                                    <h3 class="tours_booking">{{$book->tour_title}}
                                        <span>{{$book->booking_adult_no}} Adults /
                                            {{$book->booking_children_no}} Kids</span>
                                    </h3>
                                </div>
                                <div class="col-md-2 col-sm-3">
                                    <ul class="info_booking">
                                        <li><strong>Booking id</strong> {{$book->id}}</li>
                                        <li><strong>Booked on</strong>
                                            {{Carbon\Carbon::parse($book->created_at)->format('m d y')}}
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    @if($book->booking_status === 1)
                                        <div class="booking_buttons">
                                            <form action="{{route('tour.booking.invoice')}}" name="tour.booking.invoice" id="invoiceSubmit" method="post">
                                                {{csrf_field()}}
                                                {{--<a href="{{URL::to('/tours/bookings/booking-details-invoice/')}}"
                                                   class="btn_2">Invoice</a>--}}
                                                <a onclick="document.getElementById('invoiceSubmit').submit()"
                                                   class="btn_2" target="_blank">Invoice</a>
                                                <input type="hidden" name="invoice_id" value="{{$book->id}}">
                                            </form>

                                            <a href="{{URL::to('/tours/single-tour/'.$book->tour_id)}}"
                                               target="_blank" class="btn_3">Details</a>
                                        </div>
                                    @else
                                        <div class="text-center" style="margin-top: 40px">
                                            <span><strong>Pending</strong></span>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <!-- End row -->
                        </div>
                @endforeach
                <!-- End strip booking -->

                </section>
                <!-- End section 1 -->

                <section id="events">
                    <div class="row" style="padding-bottom: 25px; padding-left: 30px; padding-right: 40px">
                        <form method="post" action="">
                            <div class="row">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>Create an Event</h4>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Event Title</label>
                                            <input class="form-control" name="event_title" value=""
                                                   type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Event Place</label>
                                            <input class="form-control" name="event_place" value=""
                                                   type="text">
                                        </div>
                                    </div>
                                </div>
                                <!-- End row -->

                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Event Time</label>
                                            <input class="form-control" name="event_time" value=""
                                                   id="email_2" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Date
                                                <small>(dd/mm/yyyy)</small>
                                            </label>
                                            <input class="form-control" name="event_date" value=""
                                                   id="email" type="text">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                        <textarea name="event_details" id="textarea-input"
                                                  rows="9"
                                                  placeholder="Event Description..."
                                                  class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Tag People</label>
                                            <select multiple="multiple" id="selectUser" name="event_tag"
                                                    class="form-control">
                                                <option selected="selected" value="Eyakub">Select</option>
                                                @foreach($userAll as $all)
                                                    <option value="{{$all->user_id}}">{{$all->username}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Tagged People</label>
                                            <div id="divResult"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <hr>
                        <hr>

                        <div class="strip_booking">
                            <div class="row">
                                <div class="col-md-2 col-sm-2">
                                    <div class="date">
                                        <span class="month">Dec</span>
                                        <span class="day"><strong>30</strong>Fri</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-5">
                                    <h3 class="tours_booking">Event One<span>10 People</span></h3>
                                </div>
                                <div class="col-md-2 col-sm-3">
                                    <ul class="info_booking">
                                        <li><strong>Tour Time</strong> 10:00AM</li>
                                        <li><strong>Tour Date</strong> Sat. 20 Dec. 2015</li>
                                    </ul>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="booking_buttons">
                                        <a href="#0" class="btn_2">Details</a>
                                        <a href="#0" class="btn_3">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End row -->
                        </div>

                    </div>
                </section>

            </div>
            <!-- End content -->
        </div>
        <!-- End tabs -->
    </div>
    <!-- end container -->
</main>
<!-- End main -->

@include('layouts.footer')<!-- End footer -->

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
<script
        src="{{URL::to('https://code.jquery.com/jquery-2.2.4.js')}}"
        integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
        crossorigin="anonymous"></script>
<script src="{{URL::to('js/common_scripts_min.js')}}"></script>
<script src="{{URL::to('js/functions.js')}}"></script>
<script src="{{URL::to('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js')}}"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>


{{--<script src="{{URL::asset('js/jquery.sliderPro.min.js')}}"></script>--}}



<!-- Specific scripts -->
<script src="{{URL::to('js/tabs.js')}}"></script>
<script>
    new CBPFWTabs(document.getElementById('tabs'));
</script>
<script>
    $('.wishlist_close_admin').on('click', function (c) {
        $(this).parent().parent().parent().fadeOut('slow', function (c) {
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#selectUser').change(function () {
            var selectedOption = $('#selectUser option:selected');
            if (selectedOption.length > 0) {
                var resultString = '';
                selectedOption.each(function () {
                    resultString += $(this).val() + ', ' + $(this).text() + ' ';
                });
                $('#divResult').html(resultString);
            }
        });
    });
</script>


</body>

</html>