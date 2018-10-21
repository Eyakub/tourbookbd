@section('top_tours')
    <div class="main_title">
        <h2>Bangladesh's <span>Top</span> Tours</h2>
        <p>A place of heaven, A place of joy, A place of green land.</p>
    </div>

    <div class="row">
        @foreach($topTour as $top)
            <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="tour_container">
                    <div class="ribbon_3 popular"><span>Popular</span></div>
                    <div class="img_container">
                        <a href="{{URL::to('/single-tour/'.$top->id)}}">
                            <img src="storage/small_cover/{{$top->tour_small_cover}}" class="img-responsive"
                                 alt="image">
                            <div class="short_info">
                                <i class="icon_set_1_icon-44"></i>Historic Buildings<span
                                        class="price"><sup>$</sup>39</span>
                            </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>{{$top->tour_title}}</strong> tour</h3>
                        <div class="rating">
                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                    class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                    class="icon-smile"></i>
                            <small>(75)</small>
                        </div>
                        <!-- end rating -->
                        <div class="wishlist">
                            <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span
                                        class="tooltip-content-flip"><span
                                            class="tooltip-back">Add to wishlist</span></span></a>
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
        <a href="{{URL::to('/all-tour')}}" class="btn_1 medium"><i class="icon-eye-7"></i>View all tours (144) </a>
    </p>

@stop