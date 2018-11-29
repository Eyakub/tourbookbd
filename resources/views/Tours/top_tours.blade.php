@section('top_tours')
    <div class="main_title">
        <h2>Bangladesh's <span>Top</span> Tours</h2>
        <p>A place of heaven, A place of joy, A place of green land.</p>
    </div>

    <div class="row">
        @foreach($topTour as $top)
            <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="tour_container">
                    <div class="ribbon_3"><span>Top Rated</span></div>
                    <div class="img_container">
                        <a href="{{URL::to('/tours/single-tour/'.$top->id)}}">
                            <img src="{{asset('storage/small_cover/'.$top->tour_small_cover)}}" class="img-responsive"
                                 alt="image">
                            <div class="short_info">
                                <i class="icon_set_1_icon-44"></i>{{$top->tour_category_name}}<span
                                        class="price"><sup>BDT</sup> {{$top->tour_adult_price}}</span>
                            </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>{{$top->tour_title}}</strong></h3>
                        <div class="rating">
                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                    class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                    class="icon-smile"></i>
                            <small>({{$top->review()->count()}})</small>
                        </div>
                        <!-- end rating -->
                        <div class="wishlist">
                        @if(Session::has('user_id'))
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span
                                            class="tooltip-content-flip"><span
                                                class="tooltip-back">Add to wishlist</span></span></a>
                            @else
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);"><span
                                            class="tooltip-content-flip"><span
                                                class="tooltip-back">Add to wishlist</span></span></a>
                            @endif
                        </div>
                        <!-- End wish list-->
                    </div>
                </div>
                <!-- End box tour -->
            </div>
            <!-- End col-md-4 -->
        @endforeach

    </div>
    <!-- End row -->
    <p class="text-center add_bottom_30">
        <a href="{{URL::to('/tours')}}" class="btn_1 medium"><i class="icon-eye-7"></i>View all tours
            ({{count($allTour)}}) </a>
    </p>

@stop