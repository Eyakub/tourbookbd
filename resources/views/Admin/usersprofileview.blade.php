@extends('Admin.adminlayout')

@section('admin_panel_content')

    <!-- Theme-->
    <!-- Concat all lib & plugins css-->

    <link id="mainstyle" rel="stylesheet" href="{{asset('assets/stylesheets/skin.css')}}">

    <!-- Lib-->
    <script src="{{URL::to('assets/scripts/lib/jquery-1.11.3.min.js')}}"></script>
    <script src="{{URL::to('assets/scripts/lib/jquery-ui.js')}}"></script>
    <script src="{{URL::to('assets/scripts/lib/tether.min.js')}}"></script>

    <!-- Concat all plugins js-->
    <script src="{{URL::to('assets/scripts/theme/theme-plugins.js')}}"></script>
    <script src="{{URL::to('assets/scripts/theme/main.js')}}"></script>

    <div class="card-header">
        <strong class="card-title">User's Profile</strong>
    </div>

    <div class="container-fluid">
        <div class="row panel-wrapper">
            @foreach($showUserProfile as $profile)
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="widget">
                        <div class="w-section"
                             style="background: url('storage/user_images/{{$profile->src_user}}'); background-size: cover; height: 200px;">
                            <div class="w-user"><img src="storage/user_images/{{$profile->src_user}}" alt="">
                                <div><a class="name" href="#">{{ $profile->username }}</a></div>
                            </div>
                        </div>
                        <div class="row-no-gutter text-xs-center p-b-2">
                            <div class="col-xs-4">
                                <div class="text-desc">Followers</div>
                                <b>1.75</b>
                            </div>
                            <div class="col-xs-4">
                                <div class="text-desc">Following</div>
                                <b>5</b>
                            </div>
                            <div class="col-xs-4">
                                <div class="text-desc">Blogs</div>
                                <b>5</b>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection