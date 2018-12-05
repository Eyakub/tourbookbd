<!DOCTYPE html>
<!--[if IE 8]>
<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>
<html class="ie ie9"> <![endif]-->
<html lang="en">

<head>
    @include('layouts.metadata')
    <title>{{$guidePublic->guide_name}} - Tourist Guide</title>

    <!-- Favicons-->
@include('layouts.baricon')

<!-- Google web fonts -->
    <link href="{{URL::to('https://fonts.googleapis.com/css?family=Gochi+Hand|Lato:300,400|Montserrat:400,400i,700,700i')}}"
          rel="stylesheet">

    <!-- CSS -->
    <link href="{{asset('css/base.css')}}" rel="stylesheet">

    <link href="{{asset('css/bootstrap.css.css')}}" rel="stylesheet">

    <!--[if lt IE 9]-->
    <script src="{{URL::asset('js/html5shiv.min.js')}}"></script>
    <script src="{{URL::asset('js/respond.min.js')}}"></script>
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
         data-image-src="{{asset('storage/ken-treloar-369039-unsplash.jpg')}}" data-natural-width="1400"
         data-natural-height="470">
    <div class="parallax-content-1">
        <div class="animated fadeInDown">
            <h1>I am {{$guidePublic->guide_name}}</h1>
            <p>I'm ready to give my best.</p>
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
                <li><a href="{{URL::to('/tourist-guides')}}">Tourist Guides</a>
                </li>
                <li>{{$guidePublic->guide_name}}</li>
            </ul>
        </div>
    </div>
    <!-- End Position -->

    <div class="margin_60 container">
        <div id="tour_guide">
            <p>
                <img src="{{asset('storage/guide_pic/'.$guidePublic->guide_picture)}}" height="250" width="250"
                     alt="Image" class="img-circle styled">
            </p>
            <h2>{{$guidePublic->guide_name}} - Certified tourist guide</h2>
            <p class="lead add_bottom_30">
                "{{$guidePublic->guide_quote}}."
            </p>
        </div>
        <div class="row">
            <div class="col-md-8">
                <h3>Some words about me</h3>
                <p>
                    {{$guidePublic->guide_about}}.
                </p>
                <h4>Education</h4>
                <p>
                    {{$guidePublic->guide_education}}.
                </p>
                <h4>Past experiences</h4>
                <p>
                    {{$guidePublic->guide_experience}}.
                </p>
            </div>
            <div class="col-md-4">
                <h3>Spoken languages</h3>
                <p>
                    {{$guidePublic->guide_languages}}.
                </p>
                {{--<p>
                    <img src="img/lang_en.png" width="40" height="26" alt="Image" data-retina="true"> <img src="img/lang_fr.png" width="40" height="26" alt="Image" data-retina="true">
                    <img src="img/lang_de.png" width="40" height="26" alt="Image" data-retina="true"> <img src="img/lang_es.png" width="40" height="26" alt="Image" data-retina="true">
                </p>--}}
                <h3><i class=""></i>Certificates</h3>
                <p>
                    {{$guidePublic->guide_certificates}}
                </p>
                <ul class="list_ok">
                    {{--<li>Putant aliquando constituam</li>
                    <li>Commodo sententiae</li>
                    <li>Denique deterruisset</li>
                    <li>Putant aliquando constituam</li>--}}
                </ul>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 nopadding features-intro-img">
                <div class="features-bg">
                    <div class="features-img">
                    </div>
                </div>
            </div>
            <div class="col-md-6 nopadding">
                <div class="features-content">
                    <h3>"Do travel and enjoy"</h3>
                    <p>
                        “Travel isn’t always pretty. It isn’t always comfortable. Sometimes it hurts, it even breaks
                        your heart. But that’s okay. The journey changes you; it should change you. It leaves marks on
                        your memory, on your consciousness, on your heart, and on your body. You take something with
                        you. Hopefully, you leave something good behind.” – Anthony Bourdain
                    </p>
                    <p>
                        <a href="{{URL::to('/tours')}}" class=" btn_1 white">Read more</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container margin_60">
        <div class="main_title">
            <h2>What <span>customers </span>says</h2>
            <p>
                I'm always at your satisfaction.
            </p>
        </div>

        <div class="row">
            @foreach($guideReview as $rev)
                <div class="col-md-6">
                    <div class="review_strip">
                        <img src="{{asset('storage/user_images/'.$rev->src_user)}}" height="78" width="78" alt="Image"
                             class="img-circle">
                        <h4>{{$rev->first_name}}</h4>
                        <p>
                            "{{$rev->guidereview_desc}}"
                        </p>

                        @if(!$rev->guidereview_rating)
                            <div class="rating">
                                <i class="icon-star-empty"></i><i class="icon-star-empty"></i><i
                                        class="icon-star-empty"></i><i
                                        class=" icon-star-empty"></i><i class=" icon-star-empty"></i>
                            </div>
                        @elseif($rev->guidereview_rating === 1)
                            <i class="icon-star voted"></i><i class="icon-star-empty"></i><i
                                    class="icon-star-empty"></i><i
                                    class=" icon-star-empty"></i><i class=" icon-star-empty"></i>
                        @elseif($rev->guidereview_rating === 2)
                            <i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                    class="icon-star-empty"></i><i
                                    class=" icon-star-empty"></i><i class=" icon-star-empty"></i>
                        @elseif($rev->guidereview_rating === 3)
                            <i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                    class="icon-star voted"></i><i
                                    class=" icon-star-empty"></i><i class=" icon-star-empty"></i>
                        @elseif($rev->guidereview_rating === 4)
                            <i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                    class="icon-star voted"></i><i
                                    class=" icon-star voted"></i><i class=" icon-star-empty"></i>
                        @elseif($rev->guidereview_rating === 5)
                            <i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                    class="icon-star voted"></i><i
                                    class=" icon-star voted"></i><i class=" icon-star voted"></i>
                        @endif
                    </div>
                    <!-- End review strip -->
                </div>

            @endforeach
        </div>
        <!-- End row -->


        <div class="row">

            <div class="col-md-3">
                <h3>Reviews </h3>
                @if(!empty(Session::get('user_id')))
                    <a href="#" class="btn_1 add_bottom_30" data-toggle="modal" data-target="#myReview">Leave a
                        review</a>
                @else
                    <h5><strong>Login to Review</strong></h5>
                @endif
            </div>
        </div>

    </div>
    <!-- End container -->
</main>
<!-- End main -->
@include('layouts.footer')
<!-- End footer -->

<div id="toTop"></div><!-- Back to top button -->

<div class="modal fade" id="myReview" tabindex="-1" role="dialog" aria-labelledby="myReviewLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myReviewLabel">Write your review</h4>
            </div>
            <div class="modal-body">

                <form id="myForm" method="post" action="{{ route('guide.review') }}" name="review_guide">
                    {{csrf_field()}}
                    {{--<input type="hidden" name="_token" value="{{csrf_token()}}">--}}
                    <input name="guide_id" type="hidden" value="{{$guidePublic->id}}">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Rating</label>
                                <select class="form-control" name="guidereview_rating">
                                    <option value=0>Please review</option>
                                    <option value=1>Low</option>
                                    <option value=2>Sufficient</option>
                                    <option value=3>Good</option>
                                    <option value=4>Excellent</option>
                                    <option value=5>Super</option>
                                    <option value=0>I don't know</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- End row -->
                    <div class="form-group">
                        <textarea name="guidereview_desc" id="" class="form-control" style="height:100px"
                                  placeholder="Write your review"></textarea>
                    </div>
                    <input form="myForm" type="submit" value="Submit" class="btn_1">
                </form>

            </div>
        </div>
    </div>
</div>

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