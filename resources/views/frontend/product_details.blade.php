@extends('layouts.frontend_layout')
@section('content')
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Product Details</h4>
                        <div class="breadcrumb__links">
                            <a href="{{ url('/') }}">Home</a>
                            <span class="text-capitalize">{{ $product->name }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="shop-details mb-5">
    <div class="product__details__content">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 p-3">
                    <div class="product__details__pic__item">
                        <img src="{{asset($product->image)}}" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="product__details__text p-4" style="text-align: left">
                        <h4>{{ $product->name }}</h4>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <span> - 5 Reviews</span>
                        </div>
                        <h3>৳ {{ $product->price }}</h3>
                        <p>{{ $product->short_description }}</p>
                        <div class="product__details__cart__option">
                            <a href="{{ route('frontend.checkout',$product->id) }}" class="primary-btn">Buy Now</a>
                        </div>
                        <div class="product__details__last__option">
                            <h5><span>Guaranteed Safe Checkout</span></h5>
                            <img src="img/shop-details/details-payment.png" alt="">
                            <ul>
                                <li><span>SKU:</span> {{$product->created_at->format('dmyhis')}}</li>
                                <li><span>Categories:</span>
                                    @foreach ($categories as $category)
                                        {{$category->name}} @if(!$loop->last) , @endif
                                    @endforeach
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <h4>Description</h4>
                        <hr>
                        <p>{{$product->description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
