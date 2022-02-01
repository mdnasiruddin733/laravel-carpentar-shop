<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Make Your Furniture | {{settings()->name}}</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>


<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="{{asset(settings()->favicon)}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
{{--    <link rel="stylesheet" href="{{ asset('assets/css/style-one.css') }}" type="text/css" />--}}
    <link rel="stylesheet" href="{{ asset('assets/css/style-two.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('main.css') }}">
    @stack('style')
    <style>
        .preloader {
            position: fixed;
            height: 100%;
            width: 100%;
            background: #ffffffeb;
            top: 0;
            z-index: 12;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
{{--<div id="preloder">--}}
{{--    <div class="loader"></div>--}}
{{--</div>--}}
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__option">
        <div class="offcanvas__links">
            <a href="{{route('login')}}">Sign in</a>
            <!-- <a href="#">FAQs</a> -->
        </div>
        <!-- <div class="offcanvas__top__hover">
            <span>Usd <i class="arrow_carrot-down"></i></span> -->
            <!-- <ul>
                <li>USD</li>
                <li>EUR</li>
                <li>USD</li>
            </ul> -->
        <!-- </div> --> -->
    </div>
    <div class="offcanvas__nav__option">
        <a href="#" class="search-switch"><img src="img/icon/xsearch.png.pagespeed.ic.y-8fLDHdJm.png" alt=""></a>
        <a href="#"><img src="img/icon/xheart.png.pagespeed.ic.eX6BmaqN_X.png" alt=""></a>
        <a href="#"><img src="img/icon/xcart.png.pagespeed.ic.bfUgeYGK3w.png" alt=""> <span>0</span></a>
        <div class="price">$0.00</div>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__text">
        <p>{{settings()->topbar_ads_text}}</p>
    </div>
</div>

@include('components.header')
    @yield('content')
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form" method="post" action="{{route('frontend.search')}}">
                @csrf
                <input type="text" id="search-input" name="term" placeholder="Search here.....">
            </form>
        </div>
    </div>
@include('components.footer')
<div class="preloader">
    <h5 class="text-danger"><i class="fa fa-cog  fa-spin "></i>Loading...</h5>
</div>

<script src="{{ asset('assets/js/jquery-3.3.1.min.js')}}"></script>
{{--<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>--}}
{{--<script src="{{ asset('assets/js/jquery.js')}}"></script>--}}
<script src="{{ asset('assets/js/jquery.slicknav.js')}}"></script>
<script src="{{ asset('assets/js/mixitup.min.js')}}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('assets/js/main.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	@if(Session::has('message'))
	<script>
		var toast=toastr["{{Session::get('type')}}"]("{{Session::get('message')}}")
		toast.options = {
			"closeButton": false,
			"debug": false,
			"newestOnTop": false,
			"progressBar": false,
			"positionClass": "toast-top-right",
			"preventDuplicates": false,
			"onclick": null,
			"showDuration": "300",
			"hideDuration": "1000",
			"timeOut": "5000",
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
			"showMethod": "slideIn",
			"hideMethod": "slideOut"
			}

	</script>
	@endif
    <script>
        window.addEventListener("DOMContentLoaded",function(){
            document.querySelector('.preloader').style.display = 'none'
        })
           
</script>
</body>
</html>
