@extend('all_resorts_grid')
@section('resort_content')

    <div class="row">
        <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
            <div class="hotel_container">
                <div class="ribbon_3 popular"><span>Popular</span>
                </div>
                <div class="img_container">
                    <a href="{{URL::to('/single-resort')}}">
                        <img src="img/hotel_1.jpg" width="800" height="533" class="img-responsive" alt="Image">
                        <div class="score"><span>7.5</span>Good</div>
                        <div class="short_info hotel">
                            From/Per night<span class="price"><sup>$</sup>59</span>
                        </div>
                    </a>
                </div>
                <div class="hotel_title">
                    <h3><strong>Park Hyatt</strong> Hotel</h3>
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

        <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.2s">
            <div class="hotel_container">
                <div class="ribbon_3 popular"><span>Popular</span>
                </div>
                <div class="img_container">
                    <a href="{{URL::to('/single-resort')}}">
                        <img src="img/hotel_2.jpg" width="800" height="533" class="img-responsive" alt="Image">
                        <div class="score"><span>9.0</span>Superb</div>
                        <div class="short_info hotel">
                            From/Per night<span class="price"><sup>$</sup>45</span>
                        </div>
                    </a>
                </div>
                <div class="hotel_title">
                    <h3><strong>Mariott</strong> Hotel</h3>
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
            <!-- End box -->
        </div>
        <!-- End col-md-6 -->
    </div>
    <!-- End row -->

    <div class="row">
        <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.2s">
            <div class="hotel_container">
                <div class="ribbon_3"><span>Top rated</span>
                </div>
                <div class="img_container">
                    <a href="{{URL::to('/single-resort')}}">
                        <img src="img/hotel_3.jpg" width="800" height="533" class="img-responsive" alt="Image">
                        <div class="score"><span>9.5</span>Superb</div>
                        <div class="short_info hotel">
                            From/Per night<span class="price"><sup>$</sup>39</span>
                        </div>
                    </a>
                </div>
                <div class="hotel_title">
                    <h3><strong>Lumiere</strong> Hotel</h3>
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
            <!-- End box -->
        </div>
        <!-- End col-md-6 -->

        <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.4s">
            <div class="hotel_container">
                <div class="ribbon_3"><span>Top rated</span>
                </div>
                <div class="img_container">
                    <a href="{{URL::to('/single-resort')}}">
                        <img src="img/hotel_4.jpg" width="800" height="533" class="img-responsive" alt="Image">
                        <div class="score"><span>7.5</span>Good</div>
                        <div class="short_info hotel">
                            From/Per night<span class="price"><sup>$</sup>45</span>
                        </div>
                    </a>
                </div>
                <div class="hotel_title">
                    <h3><strong>Concorde</strong> Hotel</h3>
                    <div class="rating">
                        <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
                    </div>
                    <!-- end rating -->
                    <div class="wishlist">
                        <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                    </div>
                    <!-- End wish list-->
                </div>
            </div>
            <!-- End box -->
        </div>
        <!-- End col-md-6 -->
    </div>
    <!-- End row -->

    <div class="row">
        <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.2s">
            <div class="hotel_container">
                <div class="ribbon_3"><span>Top rated</span>
                </div>
                <div class="img_container">
                    <a href="{{URL::to('/single-resort')}}">
                        <img src="img/hotel_5.jpg" width="800" height="533" class="img-responsive" alt="Image">
                        <div class="score"><span>8.0</span>Good</div>
                        <div class="short_info hotel">
                            From/Per night<span class="price"><sup>$</sup>39</span>
                        </div>
                    </a>
                </div>
                <div class="hotel_title">
                    <h3><strong>Louvre</strong> Hotel</h3>
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
            <!-- End box -->
        </div>
        <!-- End col-md-6 -->

        <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.4s">
            <div class="hotel_container">
                <div class="ribbon_3"><span>Top rated</span>
                </div>
                <div class="img_container">
                    <a href="{{URL::to('/single-resort')}}">
                        <img src="img/hotel_6.jpg" width="800" height="533" class="img-responsive" alt="Image">
                        <div class="score"><span>8.5</span>Superb</div>
                        <div class="short_info hotel">
                            From/Per night<span class="price"><sup>$</sup>45</span>
                        </div>
                    </a>
                </div>
                <div class="hotel_title">
                    <h3><strong>Concorde</strong> Hotel</h3>
                    <div class="rating">
                        <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
                    </div>
                    <!-- end rating -->
                    <div class="wishlist">
                        <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                    </div>
                    <!-- End wish list-->
                </div>
            </div>
            <!-- End box -->
        </div>
        <!-- End col-md-6 -->
    </div>
    <!-- End row -->

    @endsection