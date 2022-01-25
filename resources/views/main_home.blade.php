@extends('layouts.frontend_layout')
@section('content')
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="{{ asset('assets/img/hero/hero-1.jpg')}}">
            </div>
            <div class="hero__items set-bg" data-setbg="{{ asset('assets/img/hero/hero-2.jpg') }}">
            </div>
        </div>
    </section>
    <section class="product spad pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">Best Sellers</li>
                        <li data-filter=".new-arrivals">New Arrivals</li>
                        <li data-filter=".hot-sales">Hot Sales</li>
                    </ul>
                </div>
            </div>
            <div class="row product__filter">
                @foreach($products as $product)
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{ asset($product->image) }}">
                            <span class="label">New</span>
                            <ul class="product__hover">
                                <li><a href="#"><img src="{{ asset('assets/img/icon/xheart.png.pagespeed.ic.eX6BmaqN_X.png') }}" alt=""></a></li>
                                <li><a href="#"><img src="{{ asset('assets/img/icon/xcompare.png.pagespeed.ic.UIWeUFOM61.png') }}" alt="">
                                        <span>Compare</span></a></li>
                                <li><a href="#"><img src="{{ asset('assets/img/icon/xsearch.png.pagespeed.ic.y-8fLDHdJm.png') }}" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>{{ $product->name }}</h6>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <a href="{{ route('frontend.product-details',$product->id) }}" class="add-cart">View Details</a>
                            <h5>৳ {{ $product->price }}</h5>
                            <div class="product__color__select">
                                <label for="pc-1">
                                    <input type="radio" id="pc-1">
                                </label>
                                <label class="active black" for="pc-2">
                                    <input type="radio" id="pc-2">
                                </label>
                                <label class="grey" for="pc-3">
                                    <input type="radio" id="pc-3">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 text-center">
                    <a class="btn btn-dark px-5 py-2 mt-5" href="{{ route('frontend.shop') }}">More Product</a>
                </div>
            </div>
        </div>
    </section>

    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
@endsection
