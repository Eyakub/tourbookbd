@extend('all_tour_list_in_grid')
@section('content_of_tours')

    <div class="row">
        @foreach($tours as $tour)
            <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="tour_container">
                    <div class="ribbon_3 popular"><span>Popular</span>
                    </div>
                    <div class="img_container">
                        <a href="{{URL::to('/tours/single-tour/'.$tour->id)}}">
                            <img src="{{asset('storage/small_cover/'.$tour->tour_small_cover)}}"
                                 style="height: 290px; width: 800px" class="img-responsive" alt="Image">
                            <div class="short_info">
                                <i class="icon_set_1_icon-44"></i>{{$tour->tour_category}}<span
                                        class="price"><sup>BDT</sup> {{$tour->tour_adult_price}}</span>
                            </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>{{$tour->tour_title}}</strong></h3>
                        <div class="rating">
                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                    class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                    class="icon-smile"></i>
                            <small>({{count($tour->review)}})</small>
                        </div>
                        <!-- end rating -->
                        <div class="wishlist">
                            @if(Session::has('user_id'))
                                <a class="tooltip_flip tooltip-effect-1" href="#">+<span
                                            class="tooltip-content-flip"><span
                                                class="tooltip-back">Add to wishlist</span></span></a>
                            @else
                                <a class="tooltip_flip tooltip-effect-1" href="#"><span
                                            class="tooltip-content-flip"><span
                                                class="tooltip-back">login to add wishlist</span></span></a>
                            @endif
                        </div>
                        <!-- End wish list-->
                    </div>
                </div>
                <!-- End box tour -->
            </div>
            <!-- End col-md-6 -->
        @endforeach

    </div>
    <!-- End row -->
    <div class="text-center">
        <ul class="pagination">
            {!! $tours-> links() !!}
        </ul>
    </div>

@endsection