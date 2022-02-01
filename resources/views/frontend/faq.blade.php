@extends('layouts.frontend_layout')

@section('content')
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Frequently Asked Questions</h4>
                        <div class="breadcrumb__links">
                            <a href="{{ url('/') }}">Home</a>
                            <span>FAQ</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="blog spad">
    <div class="container">
        <div class="row">
            <div class="col-md-12 p-2">
                @if(count($faqs)>0)
                    <div id="accordion">
                        @foreach ($faqs as $faq)
                            <div class="card m-2">
                            <div class="card-header">
                                <button class="btn btn-default btn-block text-left" data-toggle="collapse" data-target="#faq-{{$faq->id}}" style="font-size:16px;font-style:bold;">
                                    <i class="fa fa-angle-right"></i>&nbsp;{{$faq->question}}
                                </button>
                            </div>
                            <div id="faq-{{$faq->id}}" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <p class="pl-3">
                                        {{$faq->answer}}
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                @else 
                    <h3 class="text-center text-muted">No FAQ Found</h3>
                @endif
            </div>
        </div>
    </div>
</section>

@endsection
