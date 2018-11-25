<!DOCTYPE html>
<!--[if IE 8]>
<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>
<html class="ie ie9"> <![endif]-->
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    @include('layouts.metadata')
    <title>{{$blogOwner->first_name}} - <?php
        $str = $blogDetails->blog_desc;
        ?>
        {{str_limit($str, 50, '...')}}
    </title>

    <!-- Favicons-->
@include('layouts.baricon')

<!-- Google web fonts -->
    <link href="https://fonts.googleapis.com/css?family=Gochi+Hand|Lato:300,400|Montserrat:400,400i,700,700i"
          rel="stylesheet">

    <!-- CSS -->
    <link href="{{asset('css/base.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{URL::to('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css')}}"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- CSS -->
    <link href="{{asset('css/blog.css')}}" rel="stylesheet">


    <script src="{{ URL::asset('js/html5shiv.min.js')}} "></script>
    <script src="{{URL::asset('js/respond.min.js')}}"></script>

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
            <h1>Tour Blog Details</h1>
            <p>Read with your heart and enjoy and go for adventure.</p>
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
                <li><a>User Profile</a>
                </li>
                <li>User Blog</li>
                <li>Blog Details</li>
            </ul>
        </div>
    </div>
    <!-- End position -->
    <div class="container margin_60">
        <div class="row">

            <div class="col-md-9">
                <div class="box_style_1">
                    <div class="post nopadding">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                @foreach($blogDetails->images as $img)
                                    <li data-target="#myCarousel" data-slide-to="{{$loop->index}}"
                                        class="{{$loop->first? 'active': ''}}"></li>
                                @endforeach
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                @foreach($blogDetails->images as $img)
                                    <div class="item {{$loop->first? 'active': ''}}">
                                        <img src="{{asset('storage/blog_img/'.$img->blog_img)}}"
                                             alt="Image"
                                             class="img-responsive" style="width: 110%">
                                    </div>
                                @endforeach

                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="post_info clearfix">
                            <div class="post-left">
                                <ul>
                                    <li><i class="icon-calendar-empty"></i>On <span>12 Nov 2020</span>
                                    </li>
                                    <li><i class="icon-inbox-alt"></i>In <a href="#">Top tours</a>
                                    </li>
                                    <li><i class="icon-tags"></i>Tags <a href="#">Works</a> <a href="#">Personal</a>
                                    </li>
                                    <li>
                                        <i class="icon-comment"> {{count($comments)}}</i>
                                    </li>
                                </ul>
                            </div>
                            <div class="post-right"><a
                                        href="{{URL::to('/delete-personal-blog/'.$blogDetails->id)}}"
                                        class="icon-error"></a></div>
                        </div>
                        {{--<h2>Title</h2>--}}
                        <p>
                            {{$blogDetails->blog_desc}}
                        </p>
                    </div>
                    <!-- end post -->
                </div>
                <!-- end box_style_1 -->

                <h4>{{count($comments)}} comments</h4>

                <div id="comments">
                    <ol>
                        <li>
                            @foreach($comments as $comment)
                                <div class="avatar">
                                    <a href="#"><img src="{{asset('storage/user_images/'.$comment->user->src_user)}}"
                                                     height="48" width="48"
                                                     alt="Image">
                                    </a>
                                </div>
                                <div class="comment_right clearfix">
                                    <div class="comment_info">
                                        <a href="#">{{$comment->user->first_name}}</a><span>|</span> {{$comment->created_at->format('d M Y')}}
                                        <span>|</span>{{--<a
                                                href="#">Reply</a>--}}
                                    </div>
                                    <p>
                                        {{$comment->comments_desc}}
                                    </p>
                                </div>
                            @endforeach
                            {{--<ul>
                                <li>
                                    <div class="avatar">
                                        <a href="#"><img src="img/avatar2.jpg" alt="Image">
                                        </a>
                                    </div>

                                    <div class="comment_right clearfix">
                                        <div class="comment_info">
                                            Posted by <a href="#">Tom Sawyer</a><span>|</span> 25 apr 2019 <span>|</span><a href="#">Reply</a>
                                        </div>
                                        <p>
                                            Nam cursus tellus quis magna porta adipiscing. Donec et eros leo, non pellentesque arcu. Curabitur vitae mi enim, at vestibulum magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed sit amet sem a urna rutrumeger fringilla. Nam vel enim ipsum, et congue ante.
                                        </p>
                                        <p>
                                            Aenean iaculis sodales dui, non hendrerit lorem rhoncus ut. Pellentesque ullamcorper venenatis elit idaipiscingi Duis tellus neque, tincidunt eget pulvinar sit amet, rutrum nec urna. Suspendisse pretium laoreet elit vel ultricies. Maecenas ullamcorper ultricies rhoncus. Aliquam erat volutpat.
                                        </p>
                                    </div>
                                </li>
                            </ul>--}}
                        </li>
                    </ol>
                </div>
                <!-- End Comments -->

                <h4>Reply a comment</h4>
                <form action="{{route('blog.comment.own')}}" name="blog.comment.own" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="user_id" value="{{$blogOwner->id}}">
                    <input type="hidden" name="username" value="{{$username}}">
                    <input type="hidden" name="blog_id" value="{{$blogDetails->id}}">
                    <div class="form-group">
                            <textarea name="comments_desc" class="form-control style_2" style="height:150px;"
                                      placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        {{--<input type="reset" class="btn_1" value="Clear form"/>--}}
                        <input type="submit" class="btn_1" value="Post Comment"/>
                    </div>
                </form>
            </div>
            <!-- End col-md-8-->

            <aside class="col-md-3 add_bottom_30">

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

            {{--<hr>--}}

            {{--<div class="widget">
                <h4>Recent post</h4>
                <ul class="recent_post">
                    <li>
                        <i class="icon-calendar-empty"></i> 16th July, 2020
                        <div><a href="#">It is a long established fact that a reader will be distracted </a>
                        </div>
                    </li>
                    <li>
                        <i class="icon-calendar-empty"></i> 16th July, 2020
                        <div><a href="#">It is a long established fact that a reader will be distracted </a>
                        </div>
                    </li>
                    <li>
                        <i class="icon-calendar-empty"></i> 16th July, 2020
                        <div><a href="#">It is a long established fact that a reader will be distracted </a>
                        </div>
                    </li>
                </ul>
            </div>--}}
            <!-- End widget -->
                <hr>
                <div class="widget tags">
                    <h4>Tags</h4>
                    <a href="#">Nature</a>
                    <a href="#">Wildlife</a>
                    <a href="#">Camping</a>
                    <a href="#">Waterfall</a>
                </div>
                <!-- End widget -->

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
        <input value="" name="q" type="search" placeholder="Search..."/>
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