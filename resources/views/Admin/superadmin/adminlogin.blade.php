<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.metadata')
    @include('layouts.baricon')


    <link rel="stylesheet" type="text/css" href="{{asset('superadmin/vendor/bootstrap/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css"
          href="{{asset('superadmin/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('superadmin/vendor/animate/animate.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('superadmin/vendor/css-hamburgers/hamburgers.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('superadmin/vendor/select2/select2.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('superadmin/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('superadmin/css/main.css')}}">

    <title>Super Admin - TourBookBD</title>
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="{{asset('superadmin/images/img-01.png')}}" alt="IMG">
            </div>

            <form method="post" action="{{route('superadmin.login')}}" name="superadmin.login" class="login100-form validate-form">
                {{csrf_field()}}
                <span class="login100-form-title">
						Super Admin Login
					</span>

                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="admin_email" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="admin_password" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Login
                    </button>
                </div>

                <div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
                    <a class="txt2" href="#">
                        Email / Password?
                    </a>
                </div>

                {{--<div class="text-center p-t-136">
                    <a class="txt2" href="#">
                        Create your Account
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>--}}
                @if(Session::has('message'))
                    <div class="text-center p-t-136">

                        <div class="alert alert-success">
                            {{Session::get('message')}}
                        </div>

                    </div>
                @endif
            </form>
        </div>
    </div>
</div>


<!--===============================================================================================-->
<script src="{{URL::to('superadmin/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{URL::to('superadmin/vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{URL::to('superadmin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{URL::to('superadmin/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{URL::to('superadmin/vendor/tilt/tilt.jquery.min.js')}}"></script>
<script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="{{URL::to('superadmin/js/main.js')}}"></script>

</body>
</html>