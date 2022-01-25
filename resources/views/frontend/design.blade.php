@extends('layouts.frontend_layout')
@section('content')
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Design List</h4>
                        <div class="breadcrumb__links">
                            <a href="{{ url('/') }}">Home</a>
                            <span>Making</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="{{asset('assets')}}/img/design/design-1.png"></div>
                        <div class="blog__item__text">
                            <span><img src="{{asset('assets')}}/img/icon/xcalendar.png.pagespeed.ic.GXy2gYWDh7.png" alt=""> 16 February 2022</span>
                            <h5>What Curling Irons Are The Best Ones</h5>
                            <a href="{{ route('frontend.booking','design-1') }}">Booking Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="{{asset('assets')}}/img/design/design-2.png"></div>
                        <div class="blog__item__text">
                            <span><img src="{{asset('assets')}}/img/icon/xcalendar.png.pagespeed.ic.GXy2gYWDh7.png" alt=""> 21 February 2022</span>
                            <h5>Eternity Bands Do Last Forever</h5>
                            <a href="{{ route('frontend.booking','design-2') }}">Booking Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="{{asset('assets')}}/img/design/design-3.png"></div>
                        <div class="blog__item__text">
                            <span><img src="{{asset('assets')}}/img/icon/xcalendar.png.pagespeed.ic.GXy2gYWDh7.png" alt=""> 28 February 2022</span>
                            <h5>The Health Benefits Of Sunglasses</h5>
                            <a href="{{ route('frontend.booking','design-3') }}">Booking Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="{{asset('assets')}}/img/design/design-4.png"></div>
                        <div class="blog__item__text">
                            <span><img src="{{asset('assets')}}/img/icon/xcalendar.png.pagespeed.ic.GXy2gYWDh7.png" alt=""> 16 February 2022</span>
                            <h5>Aiming For Higher The Mastopexy</h5>
                            <a href="{{ route('frontend.booking','design-4') }}">Booking Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="{{asset('assets')}}/img/design/design-5.png"></div>
                        <div class="blog__item__text">
                            <span><img src="{{asset('assets')}}/img/icon/xcalendar.png.pagespeed.ic.GXy2gYWDh7.png" alt=""> 21 February 2022</span>
                            <h5>Wedding Rings A Gift For A Lifetime</h5>
                            <a href="{{ route('frontend.booking','design-5') }}">Booking Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="{{asset('assets')}}/img/design/design-6.png"></div>
                        <div class="blog__item__text">
                            <span><img src="{{asset('assets')}}/img/icon/xcalendar.png.pagespeed.ic.GXy2gYWDh7.png" alt=""> 28 February 2022</span>
                            <h5>The Different Methods Of Hair Removal</h5>
                            <a href="{{ route('frontend.booking','design-6') }}">Booking Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="{{asset('assets')}}/img/design/design-7.png"></div>
                        <div class="blog__item__text">
                            <span><img src="{{asset('assets')}}/img/icon/xcalendar.png.pagespeed.ic.GXy2gYWDh7.png" alt=""> 16 February 2022</span>
                            <h5>Hoop Earrings A Style From History</h5>
                            <a href="{{ route('frontend.booking','design-7') }}">Booking Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="{{asset('assets')}}/img/design/design-8.png"></div>
                        <div class="blog__item__text">
                            <span><img src="{{asset('assets')}}/img/icon/xcalendar.png.pagespeed.ic.GXy2gYWDh7.png" alt=""> 21 February 2022</span>
                            <h5>Lasik Eye Surgery Are You Ready</h5>
                            <a href="{{ route('frontend.booking','design-8') }}">Booking Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="{{asset('assets')}}/img/design/design-9.png"></div>
                        <div class="blog__item__text">
                            <span><img src="{{asset('assets')}}/img/icon/xcalendar.png.pagespeed.ic.GXy2gYWDh7.png" alt=""> 28 February 2022</span>
                            <h5>Lasik Eye Surgery Are You Ready</h5>
                            <a href="{{ route('frontend.booking','design-9') }}">Booking Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
