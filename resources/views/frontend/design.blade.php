@extends('layouts.frontend_layout')
@section('booking')
   active 
@endsection
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
                @foreach ($products as $product)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="{{asset($product->image)}}"></div>
                        <div class="blog__item__text">
                            <span><img src="{{asset('assets')}}/img/icon/xcalendar.png.pagespeed.ic.GXy2gYWDh7.png" alt=""> {{$product->created_at->format('d M Y')}}</span>
                            <h5>{{$product->short_description}}</h5>
                            <a href="{{ route('frontend.booking',$product->id) }}">Booking Now</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
