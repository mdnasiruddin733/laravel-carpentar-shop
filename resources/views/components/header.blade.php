<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7">
                    <div class="header__top__left">
                        <p>{{settings()->topbar_ads_text}}</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <div class="header__top__right">
                        <div class="header__top__links">
                            <a href="#">FAQs</a>
                        </div>
                        <div class="header__top__hover">
                            <span>Usd <i class="arrow_carrot-down"></i></span>
                            <ul>
                                <li>USD</li>
                                <li>EUR</li>
                                <li>USD</li>
                            </ul>
                        </div>

                            @if(auth()->check())
                                <div class="header__top__hover">
                                    <span>{{ auth()->user()->name }} <i class="arrow_carrot-down"></i></span>
                                    <ul style="padding: 10px; width: 180px;">
                                        <li style="text-align: left;font-size: 15px"><a  class="dropdown-item" href="">Profile</a></li>
                                        <li style="text-align: left;font-size: 15px"><a class="dropdown-item" href="">Settings</a></li>
                                        <li style="text-align: left;font-size: 15px">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            @else
                            <div class="header__top__links">
                                <a href="{{ route('login') }}">Sign in</a>
                            </div>
                            @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="header__logo">
                    <a href="{{ url('/') }}">
                        <img style="padding-top: 10px" src="{{ asset(settings()->logo)}}" alt="">
                        {{--                        <h4><span style="color: orangered">F</span>urniture <span style="color: orangered">m</span>art<span>.</span></h4>--}}
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li class="active"><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ route('frontend.shop') }}">Shop</a></li>
                        <li>
                            <a href="#">Service <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i></a>
                            <ul class="dropdown">
                                <li><a href="{{ route('frontend.design') }}">Making</a></li>
                                <li><a href="{{ route('frontend.repairing') }}">Repairing</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('frontend.design')}}">Booking</a></li>
                        <li><a href="">Contacts</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="header__nav__option">
                    <a href="#" class="search-switch"><img
                            src="{{ asset('assets/img/icon/xsearch.png.pagespeed.ic.y-8fLDHdJm.png')}}" alt=""></a>
                </div>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>

