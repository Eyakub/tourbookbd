@section('top_hotels')

    <div class="main_title">
        <h2>Bangladesh's <span>Top</span> Hotels</h2>
        <p>A list of hotels within your choices.</p>
    </div>

    <div class="row">
        @foreach($topHotel as $top)
            <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="hotel_container">
                    <div class="ribbon_3 popular"><span>Popular</span></div>
                    <div class="img_container">
                        <a href="{{URL::to('/single-hotel/'.$top->id)}}">
                            <img src="storage/small_cover/{{$top->hotels_small_cover}}" width="800" height="533" class="img-responsive" alt="image">
                            <div class="score"><span>7.5</span>Good</div>
                            <div class="short_info hotel">
                                From/Per night<span class="price"><sup>$</sup>59</span>
                            </div>
                        </a>
                    </div>
                    <div class="hotel_title">
                        <h3><strong>{{$top->hotels_title}}</strong></h3>
                        <div class="rating">
                            <i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                    class="icon-star voted"></i><i class="icon-star voted"></i><i
                                    class="icon-star-empty"></i>
                        </div>
                        <!-- end rating -->
                        <div class="wishlist">
                            <a class="tooltip_flip tooltip-effect-1" href="#">+<span class="tooltip-content-flip"><span
                                            class="tooltip-back">Add to wishlist</span></span></a>
                        </div>
                        <!-- End wish list-->
                    </div>
                </div>
                <!-- End box -->
            </div>
            <!-- End col-md-4 -->
        @endforeach


    </div>
    <!-- End row -->
    <p class="text-center nopadding">
        <a href="{{URL::to('/hotels')}}" class="btn_1 medium"><i class="icon-eye-7"></i>View all hotels (70) </a>
    </p>

@stop