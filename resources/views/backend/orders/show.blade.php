@extends('layouts.backend_layout')
@section('breadcrumb-title'){{Str::slug($order->product->name)}} @endsection
@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-body text-center">
                    <h3>Order Details</h3>
                </div>
                
                <div class="card-body table-responsive">
                   <table class="table">
                       <tbody>
                          <tr><td><strong>Product Name:</strong></td><td class="text-left">{{$order->product->name}}</td><td rowspan="7"><img src="{{asset($order->product->image)}}" alt="" class="d-block mx-auto" style="width:280px;"></td></tr>
                          <tr><td><strong>Booker Name:</strong></td><td class="text-left">{{$order->name}}</td></tr>
                           <tr><td><strong>Booker Email:</strong></td><td class="text-left">{{$order->email}}</td></tr>
                            <tr><td><strong>Booker Phone:</strong></td><td class="text-left">{{$order->phone}}</td></tr>
                             <tr><td><strong>Booker Address:</strong></td><td class="text-left">{{$order->address}}</td></tr>
                             <tr><td><strong>Booker Country:</strong></td><td class="text-left">{{$order->country}}</td></tr>
                             <tr><td><strong>Booker City:</strong></td><td class="text-left">{{$order->city}}</td></tr>
                             <tr><td><strong>Booker Post-Code:</strong></td><td class="text-left">{{$order->postcode}}</td></tr>
                          <tr><td><strong>Booking Status:</strong></td><td class="text-left"><span class="badge badge-{{$order->status=='delivered'? 'success':'warning'}}">{{$order->status}}</span></td></tr>
                          <tr><td><strong>Booking Price:</strong></td><td class="text-left">{{$order->product->price}} TK.</td></tr>
                          <tr><td><strong>Booking Note:</strong></td><td class="text-left">{{$order->note}}</td></tr>
                          <tr><td colspan="2"><a href="{{route('orders.index')}}" class="btn btn-primary mr-3">Back</a><a href='{{route("orders.edit",$order->id)}}' class="btn btn-success">{{$order->status=="pending"?"Deliver Order":"Make Pending"}}</a></tr>
                       </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
@endsection
