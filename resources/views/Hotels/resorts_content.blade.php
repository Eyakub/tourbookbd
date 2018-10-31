@extend('all_resorts_grid')
@section('resort_content')

    <div class="row">
        @foreach($resorts as $resort)
            <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="hotel_container">
                    <div class="ribbon_3 popular"><span>Popular</span>
                    </div>
                    <div class="img_container">
                        <a href="{{URL::to('/single-hotels/'.$resort->id)}}">
                            <img src="storage/small_cover/{{$resort->hotels_small_cover}}" width="800" height="533" class="img-responsive" alt="Image">
                            <div class="score"><span>7.5</span>Good</div>
                            <div class="short_info hotel">
                                From/Per night<span class="price"><sup>$</sup>00</span>
                            </div>
                        </a>
                    </div>
                    <div class="hotel_title">
                        <h3><strong>{{$resort->hotels_title}}</strong></h3>
                        <div class="rating">
                            <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
                        </div>
                        <!-- end rating -->
                        <div class="wishlist">
                            <a class="tooltip_flip tooltip-effect-1" href="#">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                        </div>
                        <!-- End wish list-->
                    </div>
                </div>
                <!-- End box tour -->
            </div>
            <!-- End col-md-6 -->
        @endforeach

            <div class="text-center">
                <ul class="pagination">
                    {!! $resorts-> links() !!}
                </ul>

            </div>

    </div>
    <!-- End row -->


    @endsection