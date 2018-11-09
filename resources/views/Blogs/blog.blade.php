<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html lang="en">

<head>
    @include('layouts.metadata')
    <title>Blogs - TourBookBD</title>

    <!-- Favicons-->
    @include('layouts.baricon')

    <!-- Google web fonts -->
    <link href="https://fonts.googleapis.com/css?family=Gochi+Hand|Lato:300,400|Montserrat:400,400i,700,700i" rel="stylesheet">

    <!-- CSS -->
    <link href="{{asset('css/base.css')}}" rel="stylesheet">

    <!-- CSS -->
    <link href="{{asset('css/blog.css')}}" rel="stylesheet">


    <script src="{{ URL::asset('js/html5shiv.min.js')}} "></script>
    <script src="{{URL::asset('js/respond.min.js')}}"></script>


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

<section class="parallax-window" data-parallax="scroll" data-image-src="{{asset('storage/large_cover/1539129351-470x1400.JPG')}}" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-1">
        <div class="animated fadeInDown">
            <h1>Tour Blogs</h1>
            <p>Know about all tours where people visited and shared their opinion.</p>
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
                <li>Tour Blog
                </li>
            </ul>
        </div>
    </div>
    <!-- End position -->

    <div class="container margin_60">
        <div class="row">

            <div class="col-md-9">
                <div class="box_style_1">
                    @foreach($blogs as $blog)
                        <div class="post">
                            <a href="{{URL::to('/blog-details/'.$blog->id)}}"><img src="storage/large_cover/{{$blog->blog_img}}" alt="Image" class="img-responsive">
                            </a>
                            <div class="post_info clearfix">
                                <div class="post-left">
                                    <ul>
                                        <li><i class="icon-calendar-empty"></i> On <span>12 Nov 2020</span>
                                        </li>
                                        <li><i class="icon-inbox-alt"></i> In <a href="#">Top tours</a>
                                        </li>
                                        <li><i class="icon-tags"></i> Tags <a href="#">Works</a>, <a href="#">Public</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="post-right"><i class="icon-comment"></i><a href="#">25 </a>
                                </div>
                            </div>
                            {{--<h2>Duis aute irure dolor in reprehenderit</h2>--}}
                            <p>
                                <?php
                                $str = "$blog->blog_desc";
                                ?>
                                {{str_limit($str, 250, "...")}}
                            </p>
                            <a href="{{URL::to('/blog-details/'.$blog->id)}}" class="btn_1">Read more</a>
                        </div>
                        <!-- end post -->
                    @endforeach

                    <hr>

                </div>
                <hr>

                <div class="text-center">
                    <ul class="pagination">
                        {!! $blogs-> links() !!}
                    </ul>
                </div>
            </div>
            <!-- End col-md-8-->

            <aside class="col-md-3">

                <div class="widget">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
						<button class="btn btn-default" type="button" style="margin-left:0;"><i class="icon-search"></i></button>
						</span>
                    </div>
                    <!-- /input-group -->
                </div>
                <!-- End Search -->
                <hr>
                <div class="widget" id="cat_blog">
                    <h4>Categories</h4>
                    <ul>
                        @foreach($category as $cat)
                            <li><a href="#">{{$cat->tour_category_name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <!-- End widget -->

                <hr>

            </aside>
            <!-- End aside -->

        </div>
        <!-- End row-->
    </div>
    <!-- End container -->
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

</body>

</html>