<footer class="revealed">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-3">
                <h3>Need help?</h3>
                <a href="tel://+8801937424217" id="phone">+8801937424217</a>
                <a href="mailto:eyakubsorkar@gmail.com" id="email_footer">eyakubsorkar@gmail.com</a>
            </div>
            <div class="col-md-3 col-sm-3">
                <h3>About</h3>
                <ul>
                    <li><a href="{{URL::to('/about-us')}}">About us</a></li>
                    <li><a href="{{URL::to('/faq')}}">FAQ</a></li>
                    <li><a href="{{URL::to('/user-login')}}">Login</a></li>
                    <li><a href="{{URL::to('/user-registration')}}">Register</a></li>
                    <li><a href="#">Terms and condition</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-3">
                <h3>Discover</h3>
                <ul>
                    <li><a href="{{URL::to('/blogs')}}">Community blog</a></li>
                    <li><a href="{{URL::to('/tourist-guides')}}">Tour guide</a></li>
                    {{--<li><a href="#">Wishlist</a></li>--}}
                    <li><a href="#">Gallery</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-3">
                <h3>Settings</h3>
                <div class="styled-select">
                    <select class="form-control" name="lang" id="lang">
                        <option value="English" selected>English</option>
                        <option value="French">Bangla</option>
                    </select>
                </div>
                <div class="styled-select">
                    <select class="form-control" name="currency" id="currency">
                        <option value="USD" selected>USD</option>
                        <option value="EUR">TK</option>
                    </select>
                </div>
            </div>
        </div><!-- End row -->
        <div class="row">
            <div class="col-md-12">
                <div id="social_footer">
                    <ul>
                        <li><a href="https://www.facebook.com/mdes.mdes" target="_blank"><i class="icon-facebook"></i></a></li>
                        <li><a href="https://twitter.com/Eyakub_Mdes" target="_blank"><i class="icon-twitter"></i></a></li>
                        <li><a href="https://plus.google.com/u/0/+EyakubSorkarF" target="_blank"><i class="icon-google"></i></a></li>
                        <li><a href="https://www.instagram.com/mdeyakub" target="_blank"><i class="icon-instagram"></i></a></li>
                        <li><a href="#" target="_blank"><i class="icon-youtube-play"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/eyakub-sorkar/" target="_blank"><i class="icon-linkedin"></i></a></li>
                    </ul>
                    <p>© TourBookBD 2018</p>
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
</footer><!-- End footer -->