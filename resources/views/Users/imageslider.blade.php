<html>
<head>
    <link href="{{URL::asset('css/bxslider.css')}}">
    <link href="{{URL::asset('css/bootstrap.css')}}">
</head>
<body>


<div class="row">
    <ul id="slider">
        @foreach($blogs as $img)
            <li>
                <img src="{{asset('storage/blog_img/'.$img->blog_img)}}"
                     alt="Image"
                     class="img-responsive">
            </li>
        @endforeach
    </ul>
</div>

<script src="{{URL::asset('js/jquery.bxslider.min.js')}}"></script>
<script src="{{URL::asset('js/jqurysl.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('slider').bxSlider({
            slideWidth: 500
        })
    });
</script>

</body>
</html>