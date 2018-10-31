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

    <meta name="description" content="TourBookBD - User Profile.">
    <meta name="author" content="Eyakub">
    <title>TourBookBD - User Profile</title>

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
    <link href="{{URL::asset('css/base.css')}}" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="{{URL::asset('css/admin.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/jquery.switch.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/statusbox.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/bootstrap.min.css')}}">


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
         data-image-src="{{asset('storage/large_cover/1539129351-470x1400.JPG')}}" data-natural-width="1400"
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
                <li><a href="#">Home</a>
                </li>
                <li><a href="#">Category</a>
                </li>
                <li>Page active</li>
            </ul>
        </div>
    </div>
    <!-- End Position -->

    <div class="margin_60 container">
        <div id="tabs" class="tabs">
            <nav>
                <ul>
                    <li>
                        <a href="#section-4" class="icon-profile"><span>Profile</span></a>
                    </li>
                    <li>
                        <a href="#section-5" class="icon-profile"><span>Timeline</span></a>
                    </li>
                    <li>
                        <a href="#section-2" class="icon-wishlist"><span>Wishlist</span></a>
                    </li>
                    <li>
                        <a href="#section-3" class="icon-settings"><span>Settings</span></a>
                    </li>
                    <li>
                        <a href="#section-1" class="icon-booking"><span>Bookings</span></a>
                    </li>
                </ul>
            </nav>
            <div class="content">


                <section id="section-4">
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
                            <img src="storage/user_images/{{$user->src_user}}" height="250" width="250" alt="Image"
                                 class="img-responsive styled profile_pic">
                        </div>
                    </div>
                    <!-- End row -->

                    <div class="divider"></div>

                    <div class="row">
                        <div class="col-md-12">
                            <h4>Edit profile</h4>
                        </div>
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
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Phone number</label>
                                <input class="form-control" name="email_2" id="email_2" type="text">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Date of birth
                                    <small>(dd/mm/yyyy)</small>
                                </label>
                                <input class="form-control" name="email" id="email" type="text">
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
                                <input class="form-control" name="first_name" id="first_name" type="text">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>City/Town</label>
                                <input class="form-control" name="last_name" id="last_name" type="text">
                            </div>
                        </div>
                    </div>
                    <!-- End row -->

                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Zip code</label>
                                <input class="form-control" name="email" id="email" type="text">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Country</label>
                                <select id="country" class="form-control" name="country">
                                    <option value="">Select...</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- End row -->

                    <hr>
                    <h4>Upload profile photo</h4>
                    <div class="form-inline upload_1">
                        <div class="form-group">
                            <input type="file" name="files[]" id="js-upload-files" multiple>
                        </div>
                        <button type="submit" class="btn_1 green" id="js-upload-submit">Upload file</button>
                    </div>

                    <!-- Hidden on mobiles -->
                    <div class="hidden-xs">
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

                        <hr>
                        <button type="submit" class="btn_1 green">Update Profile</button>
                </section>
                <!-- End section 4 -->

                <section id="section-5">
                    <div class="row">

                        <div class="row">
                            <div class="col-md-9" id="new_status">
                                <ul class="navbar-nav col-md-9" id="post_header" role="navigation">
                                    <h5>Post</h5>
                                    {{--<li><a href="#"><span class="glyphicon glyphicon-pencil"></span>Update Status</a></li>--}}
                                    {{--<li><a href="#"><span class="glyphicon glyphicon-picture"></span>Add Photos/Video</a></li>--}}
                                    {{--<li><a href="#"><span class="glyphicon glyphicon-th"></span>Create Photo Album</a></li>--}}
                                </ul>
                                <div class="col-md-8" id="post_content">
                                    <img alt="profile picture" class="col-xs-1"
                                         src="storage/user_images/{{$user->src_user}}">
                                    <div class="textarea_wrap"><textarea class="col-md-7"
                                                                         placeholder="What's on your mind?"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12" id="post_footer">
                                    <ul class="navbar-nav col-md-7">
                                        <li><a href="#"><span class="glyphicon glyphicon-camera"></span></a></li>
                                        <li><a href="#"><span class="glyphicon glyphicon-user"></span></a></li>
                                        <li><a href="#"><span class="glyphicon glyphicon-sunglasses"></span></a></li>
                                        <li><a href="#"><span class="glyphicon glyphicon-map-marker"></span></a></li>
                                    </ul>
                                    <div class="col-md-5">
                                        <button class="btn btn-default"><span
                                                    class="glyphicon glyphicon-cog"></span>Custom<span class="caret"></span>
                                        </button>
                                        <button class="btn btn-primary">Post</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-9">
                            <div class="box_style_1">
                                <div class="post">
                                    <a href="blog_post_right_sidebar.html"><img src="img/blog-3.jpg" alt="Image"
                                                                                class="img-responsive">
                                    </a>
                                    <div class="post_info clearfix">
                                        <div class="post-left">
                                            <ul>
                                                <li><i class="icon-calendar-empty"></i> On <span>12 Nov 2020</span>
                                                </li>
                                                <li><i class="icon-inbox-alt"></i> In <a href="#">Top tours</a>
                                                </li>
                                                <li><i class="icon-tags"></i> Tags <a href="#">Works</a>, <a href="#">Personal</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="post-right"><i class="icon-comment"></i><a href="#">25 </a>
                                        </div>
                                    </div>
                                    <h2>Duis aute irure dolor in reprehenderit</h2>
                                    <p>
                                        Ludus albucius adversarium eam eu. Sit eu reque tation aliquip. Quo no dolorum
                                        albucius lucilius, hinc eligendi ut sed. Ex nam quot ferri suscipit, mea ne
                                        legere alterum repudiandae. Ei pri quaerendum intellegebat, ut vel consequuntur
                                        voluptatibus. Et volumus sententiae adversarium duo......
                                    </p>
                                    <p>
                                        Ludus albucius adversarium eam eu. Sit eu reque tation aliquip. Quo no dolorum
                                        albucius lucilius, hinc eligendi ut sed. Ex nam quot ferri suscipit, mea ne
                                        legere alterum repudiandae. Ei pri quaerendum intellegebat, ut vel consequuntur
                                        voluptatibus. Et volumus sententiae adversarium duo......
                                    </p>
                                    <a href="{{URL::to('/blog-details')}}" class="btn_1">Read more</a>
                                </div>
                                <!-- end post -->

                                <hr>

                            </div>
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
                                <!-- end pagination-->
                            </div>
                        </div>
                        <!-- End col-md-8-->
                    </div>

                </section>

                <section id="section-2">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="hotel_container">
                                <div class="img_container">
                                    <a href="single_hotel.html">
                                        <img src="{{URL::asset('img/hotel_1.jpg')}}" width="800" height="533"
                                             class="img-responsive" alt="Image">
                                        <div class="ribbon top_rated">
                                        </div>
                                        <div class="score">
                                            <span>7.5</span>Good
                                        </div>
                                        <div class="short_info hotel">
                                            From/Per night<span class="price"><sup>$</sup>59</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="hotel_title">
                                    <h3><strong>Park Hyatt</strong> Hotel</h3>
                                    <div class="rating">
                                        <i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                                class="icon-star voted"></i><i class="icon-star voted"></i><i
                                                class="icon-star-empty"></i>
                                    </div>
                                    <!-- end rating -->
                                    <div class="wishlist_close_admin">
                                        -
                                    </div>
                                </div>
                            </div>
                            <!-- End box tour -->
                        </div>
                        <!-- End col-md-6 -->

                        <div class="col-md-4 col-sm-6 ">
                            <div class="hotel_container">
                                <div class="img_container">
                                    <a href="single_hotel.html">
                                        <img src="{{URL::asset('img/hotel_2.jpg')}}" width="800" height="533"
                                             class="img-responsive" alt="Image">
                                        <div class="ribbon top_rated">
                                        </div>
                                        <div class="score">
                                            <span>9.0</span>Superb
                                        </div>
                                        <div class="short_info hotel">
                                            From/Per night<span class="price"><sup>$</sup>45</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="hotel_title">
                                    <h3><strong>Mariott</strong> Hotel</h3>
                                    <div class="rating">
                                        <i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                                class="icon-star voted"></i><i class="icon-star voted"></i><i
                                                class="icon-star-empty"></i>
                                    </div>
                                    <!-- end rating -->
                                    <div class="wishlist_close_admin">
                                        -
                                    </div>
                                </div>
                            </div>
                            <!-- End box -->
                        </div>
                        <!-- End col-md-6 -->

                        <div class="col-md-4 col-sm-6">
                            <div class="tour_container">
                                <div class="img_container">
                                    <a href="single_tour.html">
                                        <img src="{{URL::asset('img/tour_box_1.jpg')}}" width="800" height="533"
                                             class="img-responsive" alt="Image">
                                        <div class="ribbon top_rated">
                                        </div>
                                        <div class="short_info">
                                            <i class="icon_set_1_icon-44"></i>Historic Buildings<span
                                                    class="price"><sup>$</sup>45</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="tour_title">
                                    <h3><strong>Arc Triomphe</strong> tour</h3>
                                    <div class="rating">
                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                class="icon-smile"></i>
                                        <small>(75)</small>
                                    </div>
                                    <!-- end rating -->
                                    <div class="wishlist_close_admin">
                                        -
                                    </div>
                                </div>
                            </div>
                            <!-- End box tour -->
                        </div>
                        <!-- End col-md-6 -->

                        <div class="col-md-4 col-sm-6">
                            <div class="tour_container">
                                <div class="img_container">
                                    <a href="single_tour.html">
                                        <img src="{{URL::asset('img/tour_box_3.jpg')}}" width="800" height="533"
                                             class="img-responsive" alt="Image">
                                        <div class="ribbon popular">
                                        </div>
                                        <div class="short_info">
                                            <i class="icon_set_1_icon-44"></i>Historic Buildings<span
                                                    class="price"><sup>$</sup>45</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="tour_title">
                                    <h3><strong>Versailles</strong> tour</h3>
                                    <div class="rating">
                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                class="icon-smile"></i>
                                        <small>(75)</small>
                                    </div>
                                    <!-- end rating -->
                                    <div class="wishlist_close_admin">
                                        -
                                    </div>
                                </div>
                            </div>
                            <!-- End box tour -->
                        </div>
                        <!-- End col-md-6 -->

                        <div class="col-md-4 col-sm-6">
                            <div class="tour_container">
                                <div class="img_container">
                                    <a href="single_tour.html">
                                        <img src="{{URL::asset('img/tour_box_4.jpg')}}" width="800" height="533"
                                             class="img-responsive" alt="Image">
                                        <div class="ribbon popular">
                                        </div>
                                        <div class="short_info">
                                            <i class="icon_set_1_icon-30"></i>Walking tour<span
                                                    class="price"><sup>$</sup>45</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="tour_title">
                                    <h3><strong>Pompidue</strong> tour</h3>
                                    <div class="rating">
                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                class="icon-smile"></i>
                                        <small>(75)</small>
                                    </div>
                                    <!-- end rating -->
                                    <div class="wishlist_close_admin">
                                        -
                                    </div>
                                </div>
                            </div>
                            <!-- End box tour -->
                        </div>
                        <!-- End col-md-6 -->

                        <div class="col-md-4 col-sm-6">
                            <div class="transfer_container">
                                <div class="img_container">
                                    <a href="single_transfer.html">
                                        <img src="img/transfer_1.jpg" width="800" height="533" class="img-responsive"
                                             alt="Image">
                                        <div class="ribbon top_rated">
                                        </div>
                                        <div class="short_info">
                                            From/Per person<span class="price"><sup>$</sup>45</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="transfer_title">
                                    <h3><strong>Orly Airport</strong> private</h3>
                                    <div class="rating">
                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                class="icon-smile"></i>
                                        <small>(75)</small>
                                    </div>
                                    <!-- end rating -->
                                    <div class="wishlist_close_admin">
                                        -
                                    </div>
                                </div>
                            </div>
                            <!-- End box tour -->
                        </div>
                        <!-- End col-md-6 -->

                    </div>
                    <!-- End row -->
                    <button type="submit" class="btn_1 green">Update wishlist</button>
                </section>
                <!-- End section 2 -->

                <section id="section-3">
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
                        <div class="col-md-6 col-sm-6">
                            <h4>Notification settings</h4>
                            <table class="table table-striped options_cart">
                                <tbody>
                                <tr>
                                    <td style="width:10%">
                                        <i class="icon_set_1_icon-33"></i>
                                    </td>
                                    <td style="width:60%">
                                        New Citytours Tours
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
                                        New Citytours Hotels
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
                                        New Citytours Transfers
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
                                        New Citytours special offers
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
                        </div>
                    </div>
                    <!-- End row -->
                </section>
                <!-- End section 3 -->

                <section id="section-1">
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

                    <div class="strip_booking">
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <div class="date">
                                    <span class="month">Dec</span>
                                    <span class="day"><strong>23</strong>Sat</span>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-5">
                                <h3 class="hotel_booking">Hotel Mariott Paris<span>2 Adults / 2 Nights</span></h3>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <ul class="info_booking">
                                    <li><strong>Booking id</strong> 23442</li>
                                    <li><strong>Booked on</strong> Sat. 23 Dec. 2015</li>
                                </ul>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <div class="booking_buttons">
                                    <a href="#0" class="btn_2">Edit</a>
                                    <a href="#0" class="btn_3">Cancel</a>
                                </div>
                            </div>
                        </div>
                        <!-- End row -->
                    </div>
                    <!-- End strip booking -->

                    <div class="strip_booking">
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <div class="date">
                                    <span class="month">Dec</span>
                                    <span class="day"><strong>27</strong>Fri</span>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-5">
                                <h3 class="tours_booking">Louvre Museum<span>2 Adults / 2 Childs</span></h3>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <ul class="info_booking">
                                    <li><strong>Booking id</strong> 23442</li>
                                    <li><strong>Booked on</strong> Sat. 20 Dec. 2015</li>
                                </ul>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <div class="booking_buttons">
                                    <a href="#0" class="btn_2">Edit</a>
                                    <a href="#0" class="btn_3">Cancel</a>
                                </div>
                            </div>
                        </div>
                        <!-- End row -->
                    </div>
                    <!-- End strip booking -->

                    <div class="strip_booking">
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <div class="date">
                                    <span class="month">Dec</span>
                                    <span class="day"><strong>28</strong>Fri</span>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-5">
                                <h3 class="tours_booking">Tour Eiffel<span>2 Adults</span></h3>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <ul class="info_booking">
                                    <li><strong>Booking id</strong> 23442</li>
                                    <li><strong>Booked on</strong> Sat. 20 Dec. 2015</li>
                                </ul>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <div class="booking_buttons">
                                    <a href="#0" class="btn_2">Edit</a>
                                    <a href="#0" class="btn_3">Cancel</a>
                                </div>
                            </div>
                        </div>
                        <!-- End row -->
                    </div>
                    <!-- End strip booking -->

                    <div class="strip_booking">
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <div class="date">
                                    <span class="month">Dec</span>
                                    <span class="day"><strong>30</strong>Fri</span>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-5">
                                <h3 class="transfers_booking">Orly Airport<span>2 Adults / 2Childs</span></h3>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <ul class="info_booking">
                                    <li><strong>Booking id</strong> 23442</li>
                                    <li><strong>Booked on</strong> Sat. 20 Dec. 2015</li>
                                </ul>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <div class="booking_buttons">
                                    <a href="#0" class="btn_2">Edit</a>
                                    <a href="#0" class="btn_3">Cancel</a>
                                </div>
                            </div>
                        </div>
                        <!-- End row -->
                    </div>
                    <!-- End strip booking -->

                </section>
                <!-- End section 1 -->

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
<script src="{{URL::to('js/jquery-2.2.4.min.js')}}"></script>
<script src="{{URL::to('js/common_scripts_min.js')}}"></script>
<script src="{{URL::to('js/functions.js')}}"></script>

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

</body>

</html>