@extends('layouts.frontend_layout')

@section('content')
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Contact Us</h4>
                        <div class="breadcrumb__links">
                            <a href="{{ url('/') }}">Home</a>
                            <span>Search</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="blog spad">
    <div class="container">
        <div class="row">
            <div class="col-md-12 p-4">
                @if(count($products)>0)
                    <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Product</th>
                            <th>Product Name</th>
                            <th>Type</th>
                            <th>Category</th>
                            <th class="text-center">Created at</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $sereal = 1 @endphp
                        @foreach($products as $product)
                            <tr>
                                <td class="text-center text-muted">{{ $sereal,$sereal++ }}</td>
                                <td class="">
                                    <img width="50px" src="{{ asset($product->image) }}" alt="">
                                </td>
                                <td class="">{{ $product->name }}</td>
                                <td class="text-capitalize">{{ $product->type }}</td>
                                <td class="">{{ $product->category['name']}}</td>
                                <td class="text-center">{{ $product->created_at->format("d M, Y") }}</td>
                                <td class="text-center">
                                   <a href="{{url('search/details/'.$product->id)}}" id="PopoverCustomT-1" class="btn btn-primary btn-sm">View Details</a> 
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                @else 
                    <h3 class="text-center text-muted">No results found</h3>
                @endif
            </div>
        </div>
    </div>
</section>

@endsection
